#include "volk.h"
#include "php.h"
#include "util.hpp"
extern "C" {
    void ZEND_FASTCALL getExtensions(zend_execute_data *execute_data, zval *return_value) {
        char* extensionName = nullptr;
        size_t extensionName_size = -1;
        if (zend_parse_parameters(ZEND_NUM_ARGS(), "|!s", &extensionName, &extensionName_size) != SUCCESS) return;
        VkExtensionProperties* extensions = nullptr;
        uint32_t extensionCount = 0;
        VkResult result;
        do {
            vkEnumerateInstanceExtensionProperties(extensionName, &extensionCount, nullptr);
            extensions = (VkExtensionProperties*)erealloc(extensions, extensionCount * sizeof(VkExtensionProperties));
            result = vkEnumerateInstanceExtensionProperties(extensionName, &extensionCount, extensions);
        } while (result == VK_INCOMPLETE);
        array_init_size(return_value, extensionCount);
        if (extensions) {
            for (uint32_t i = 0; i < extensionCount; i++) {
                auto* extension = php_new(&extensions[i]);
                zval obj;
                storage_new(&obj, "iggyvolz\\vulkan\\Extension", extension);
                add_next_index_zval(return_value, &obj);
            }
            efree(extensions);
        }
    }
    void ZEND_FASTCALL extension_getName(zend_execute_data *execute_data, zval *return_value) {
        auto* self = storage_get_const<VkExtensionProperties>(execute_data->This);
        ZVAL_STRING(return_value, self->extensionName);
    }
    void ZEND_FASTCALL extension_getSpecVersion(zend_execute_data *execute_data, zval *return_value) {
        auto* self = storage_get_const<VkExtensionProperties>(execute_data->This);
        ZVAL_LONG(return_value, self->specVersion);
    }
    void ZEND_FASTCALL extension_destruct(zend_execute_data *execute_data, zval *return_value) {
        storage_remove<VkExtensionProperties>(execute_data->This);
    }
}