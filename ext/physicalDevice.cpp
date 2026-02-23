#include "volk.h"
#include "php.h"
#include "util.hpp"

extern "C" {
    void ZEND_FASTCALL physicalDevice_destruct(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        storage_remove<VkPhysicalDevice>(execute_data->This);
        storage_remove_const<VolkInstanceTable>(execute_data->This);
    }
    void ZEND_FASTCALL physicalDeviceSparseProperties_destruct(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        storage_remove<VkPhysicalDeviceSparseProperties>(execute_data->This);
    }
    void ZEND_FASTCALL physicalDeviceLimits_destruct(zend_execute_data *execute_data, zval *return_value) {
        if (zend_parse_parameters_none() != SUCCESS) return;
        storage_remove<VkPhysicalDeviceLimits>(execute_data->This);
    }
}