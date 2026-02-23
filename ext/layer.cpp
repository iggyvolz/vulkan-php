#include "volk.h"
#include "php.h"
#include "util.hpp"
extern "C" {
    void ZEND_FASTCALL getLayers(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        VkLayerProperties* layers = nullptr;
        uint32_t layerCount = 0;
        VkResult result;
        do {
            vkEnumerateInstanceLayerProperties(&layerCount, nullptr);
            layers = (VkLayerProperties*)erealloc(layers, layerCount * sizeof(VkLayerProperties));
            result = vkEnumerateInstanceLayerProperties(&layerCount, layers);
        } while (result == VK_INCOMPLETE);
        array_init_size(return_value, layerCount);
        if (layers) {
            for (uint32_t i = 0; i < layerCount; i++) {
                auto* layer = php_new(&layers[i]);
                zval obj;
                storage_new(&obj, "iggyvolz\\vulkan\\Layer", layer);
                add_next_index_zval(return_value, &obj);
            }
            efree(layers);
        }
    }
    void ZEND_FASTCALL layer_getName(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkLayerProperties>(execute_data->This);
        RETURN_STRING(self->layerName);
    }
    void ZEND_FASTCALL layer_getSpecVersion(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkLayerProperties>(execute_data->This);
        RETURN_LONG(self->specVersion);
    }
    void ZEND_FASTCALL layer_getImplementationVersion(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkLayerProperties>(execute_data->This);
        RETURN_LONG(self->implementationVersion);
    }
    void ZEND_FASTCALL layer_getDescription(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkLayerProperties>(execute_data->This);
        RETURN_STRING(self->description);
    }
    void ZEND_FASTCALL layer_destruct(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        storage_remove<VkLayerProperties>(execute_data->This);
    }
}