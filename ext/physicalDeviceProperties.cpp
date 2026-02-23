#include "volk.h"
#include "php.h"
#include "util.hpp"

extern "C" {

    void ZEND_FASTCALL physicalDeviceProperties_getApiVersion(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        RETURN_LONG(self->apiVersion);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDriverVersion(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        RETURN_LONG(self->driverVersion);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getVendorID(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        RETURN_LONG(self->vendorID);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDeviceID(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        RETURN_LONG(self->deviceID);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDeviceType(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        enum_get(return_value, "iggyvolz\\vulkan\\PhysicalDeviceType", self->deviceType);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDeviceName(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        RETURN_STRING(self->deviceName);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getPipelineCacheUUID(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        RETURN_STRINGL((const char*)self->pipelineCacheUUID, VK_UUID_SIZE);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getLimits(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        storage_new(return_value, "iggyvolz\\vulkan\\PhysicalDeviceLimits", &self->limits);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getSparseProperties(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceProperties>(execute_data->This);
        storage_new(return_value, "iggyvolz\\vulkan\\PhysicalDeviceSparseProperties", &self->sparseProperties);
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDeviceUUID(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceVulkan11Properties>(execute_data->This);
        RETURN_STRINGL((const char*)self->deviceUUID, zend_strnlen((const char*)self->deviceUUID, VK_UUID_SIZE));
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDriverUUID(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceVulkan11Properties>(execute_data->This);
        RETURN_STRINGL((const char*)self->driverUUID, zend_strnlen((const char*)self->driverUUID, VK_UUID_SIZE));
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDeviceLUID(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceVulkan11Properties>(execute_data->This);
        if (self->deviceLUIDValid) {
            RETURN_STRINGL((const char*)self->deviceLUID, zend_strnlen((const char*)self->deviceLUID, VK_LUID_SIZE));
        } else {
            RETURN_NULL();
        }
    }
    void ZEND_FASTCALL physicalDeviceProperties_getDeviceNodeMask(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        auto* self = storage_get_const<VkPhysicalDeviceVulkan11Properties>(execute_data->This);
        if (self->deviceLUIDValid) {
            RETURN_LONG(self->deviceNodeMask);
        } else {
            RETURN_NULL();
        }
    }
    void ZEND_FASTCALL physicalDeviceProperties_destruct(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        storage_remove<VkPhysicalDeviceProperties>(execute_data->This);
        storage_remove<VkPhysicalDeviceVulkan11Properties>(execute_data->This);
        storage_remove<VkPhysicalDeviceVulkan12Properties>(execute_data->This);
        storage_remove<VkPhysicalDeviceVulkan13Properties>(execute_data->This);
        storage_remove<VkPhysicalDeviceVulkan14Properties>(execute_data->This);
    }
}