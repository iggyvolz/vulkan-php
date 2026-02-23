#include "volk.h"
#include "php.h"
#include "util.hpp"
#include "zend_interfaces.h"

void * vkAlloc(void*, size_t size, size_t, VkSystemAllocationScope) {
    return emalloc(size);
}

void* vkRealloc(void*, void* original, size_t size, size_t, VkSystemAllocationScope) {
    return erealloc(original, size);
}

void vkFree(void*, void* memory) {
    efree(memory);
}

static VkAllocationCallbacks allocator = {
    .pUserData = nullptr,
    .pfnAllocation = vkAlloc,
    .pfnReallocation = vkRealloc,
    .pfnFree = vkFree,
    .pfnInternalAllocation = nullptr,
    .pfnInternalFree = nullptr
};

#ifdef __cpp_lib_debugging
#include <debugging>
#else
// all freestanding
namespace std {
    // debugging utility
    void breakpoint() noexcept {
        raise(SIGTRAP);
    }
    bool is_debugger_present() noexcept {
        return false;
    }
    void breakpoint_if_debugging() noexcept {
        if (std::is_debugger_present()) std::breakpoint();
    }
}
#endif

extern "C" {
    void ZEND_FASTCALL createInstance(zend_execute_data *execute_data, zval *return_value) {
        zend_long flags;
        zend_string* application_name;
        zend_long application_version;
        zend_string* engine_name;
        zend_long engine_version, api_version;

        zval *layers_php, *extensions_php;
        if (zend_parse_parameters(ZEND_NUM_ARGS(), "lSlSllaa", &flags, &application_name, &application_version, &engine_name, &engine_version, &api_version, &layers_php, &extensions_php) != SUCCESS) return;

        auto layers_plus_extensions = zend_array_count(Z_ARRVAL_P(layers_php)) + zend_array_count(Z_ARRVAL_P(extensions_php));
        if (layers_plus_extensions == 0) layers_plus_extensions = 1;
        auto layers_and_extensions = (char**)emalloc(sizeof(char*) * layers_plus_extensions);
        auto layers = layers_and_extensions;
        auto extensions = layers_and_extensions + zend_array_count(Z_ARRVAL_P(layers_php));
        for (size_t i = 0; i < zend_array_count(Z_ARRVAL_P(layers_php)); i++) {
            layers[i] = Z_STRVAL_P(zend_hash_index_find(Z_ARRVAL_P(layers_php), i));
        }
        for (size_t i = 0; i < zend_array_count(Z_ARRVAL_P(extensions_php)); i++) {
            extensions[i] = Z_STRVAL_P(zend_hash_index_find(Z_ARRVAL_P(extensions_php), i));
        }
        storage_new(return_value, "iggyvolz\\vulkan\\Instance");
        storage_put(return_value, layers_and_extensions);
        auto* applicationInfo = storage_put(return_value, php_new<VkApplicationInfo>());
        *applicationInfo = {
            .sType = VK_STRUCTURE_TYPE_APPLICATION_INFO,
            .pNext = nullptr,
            .pApplicationName = application_name->val,
            .applicationVersion = (uint32_t)application_version,
            .pEngineName = engine_name->val,
            .engineVersion = (uint32_t)engine_version,
            .apiVersion = (uint32_t)api_version,
        };
        auto* createInfo = storage_put(return_value, php_new<VkInstanceCreateInfo>());
        *createInfo = {
            .sType = VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO,
            .pNext = nullptr,
            .flags = (VkInstanceCreateFlags)flags,
            .pApplicationInfo = applicationInfo,
            .enabledLayerCount = zend_array_count(Z_ARRVAL_P(layers_php)),
            .ppEnabledLayerNames = layers,
            .enabledExtensionCount = zend_array_count(Z_ARRVAL_P(extensions_php)),
            .ppEnabledExtensionNames = extensions
        };
        std::breakpoint_if_debugging();
        auto* instance = php_new<VkInstance>();
        const auto result = vkCreateInstance(createInfo, &allocator, instance);
        if (result != VK_SUCCESS) {
            efree(instance);
            vulkanFail(result);
            RETURN_THROWS();
        }
        storage_put(return_value, instance);
        auto* instanceTable = php_new<VolkInstanceTable>();
        volkLoadInstanceTable(instanceTable, *instance);
        storage_put(return_value, instanceTable);
        zend_update_property(Z_OBJCE_P(return_value), Z_OBJ_P(return_value), ZEND_STRL("vulkan"), &execute_data->This);
    }

    void ZEND_FASTCALL instance_destruct(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* instance = storage_get<VkInstance>(execute_data->This);
        storage_get_const<VolkInstanceTable>(execute_data->This)->vkDestroyInstance(*instance, &allocator);
        storage_remove<VolkInstanceTable>(execute_data->This);
        storage_remove<VkInstance>(execute_data->This);
        storage_remove<char**>(execute_data->This);
        storage_remove<VkApplicationInfo>(execute_data->This);
        storage_remove<VkInstanceCreateInfo>(execute_data->This);
    }

    void ZEND_FASTCALL instance_getPhysicalDevices(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* instance = storage_get_const<VkInstance>(execute_data->This);
        auto* instanceTable = storage_get_const<VolkInstanceTable>(execute_data->This);

        VkPhysicalDevice* devices = nullptr;
        uint32_t deviceCount = 0;
        VkResult result;
        do {
            instanceTable->vkEnumeratePhysicalDevices(*instance, &deviceCount, nullptr);
            devices = (VkPhysicalDevice*)erealloc(devices, deviceCount * sizeof(VkPhysicalDevice));
            result = instanceTable->vkEnumeratePhysicalDevices(*instance, &deviceCount, devices);
        } while (result == VK_INCOMPLETE);
        if (result != VK_SUCCESS) {
            efree(devices);
            vulkanFail(result);
            RETURN_THROWS();
        }
        array_init_size(return_value, deviceCount);
        auto* createInfo = storage_get<VkInstanceCreateInfo>(execute_data);


        for (uint32_t i = 0; i < deviceCount; i++) {
            auto* physicalDevice = php_new(&devices[i]);
            zval obj;
            storage_new(&obj, "iggyvolz\\vulkan\\PhysicalDevice", physicalDevice);
            storage_put(&obj, instanceTable);
            zend_update_property(Z_OBJCE(obj), Z_OBJ(obj), ZEND_STRL("instance"), &execute_data->This);
            add_next_index_zval(return_value, &obj);

            // Get properties for physical device
            auto* properties = php_new<VkPhysicalDeviceProperties>();
            zval properties_php;
            storage_new(&properties_php, "iggyvolz\\vulkan\\PhysicalDeviceProperties", properties);
            zend_update_property(Z_OBJCE(obj), Z_OBJ(obj), ZEND_STRL("properties"), &properties_php);
            if (instanceTable->vkGetPhysicalDeviceProperties2) {
                VkPhysicalDeviceProperties2 deviceProperties2 {
                    .sType = VK_STRUCTURE_TYPE_PHYSICAL_DEVICE_PROPERTIES_2,
                };
                auto* curr = (VkBaseOutStructure*)&deviceProperties2;
                if (VK_VERSION_MAJOR(createInfo->pApplicationInfo->apiVersion) >= 1 && VK_VERSION_MINOR(createInfo->pApplicationInfo->apiVersion) >= 1) {
                    curr->pNext = (VkBaseOutStructure*)storage_put(&properties_php, php_new<VkPhysicalDeviceVulkan11Properties>({.sType = VK_STRUCTURE_TYPE_PHYSICAL_DEVICE_VULKAN_1_1_PROPERTIES}));
                    curr = curr->pNext;
                }
                if (VK_VERSION_MAJOR(createInfo->pApplicationInfo->apiVersion) >= 1 && VK_VERSION_MINOR(createInfo->pApplicationInfo->apiVersion) >= 2) {
                    curr->pNext = (VkBaseOutStructure*)storage_put(&properties_php, php_new<VkPhysicalDeviceVulkan12Properties>({.sType = VK_STRUCTURE_TYPE_PHYSICAL_DEVICE_VULKAN_1_2_PROPERTIES}));
                    curr = curr->pNext;
                }
                if (VK_VERSION_MAJOR(createInfo->pApplicationInfo->apiVersion) >= 1 && VK_VERSION_MINOR(createInfo->pApplicationInfo->apiVersion) >= 3) {
                    curr->pNext = (VkBaseOutStructure*)storage_put(&properties_php, php_new<VkPhysicalDeviceVulkan13Properties>({.sType = VK_STRUCTURE_TYPE_PHYSICAL_DEVICE_VULKAN_1_3_PROPERTIES}));
                    curr = curr->pNext;
                }
                if (VK_VERSION_MAJOR(createInfo->pApplicationInfo->apiVersion) >= 1 && VK_VERSION_MINOR(createInfo->pApplicationInfo->apiVersion) >= 4) {
                    curr->pNext = (VkBaseOutStructure*)storage_put(&properties_php, php_new<VkPhysicalDeviceVulkan14Properties>({.sType = VK_STRUCTURE_TYPE_PHYSICAL_DEVICE_VULKAN_1_4_PROPERTIES}));
                    curr = curr->pNext;
                }
                instanceTable->vkGetPhysicalDeviceProperties2(*physicalDevice, &deviceProperties2);
                memcpy(properties, &deviceProperties2.properties, sizeof(VkPhysicalDeviceProperties));
            } else {
                instanceTable->vkGetPhysicalDeviceProperties(*physicalDevice, properties);
            }
        }
        efree(devices);
    }
}