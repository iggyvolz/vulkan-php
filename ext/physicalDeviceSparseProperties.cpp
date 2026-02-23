#include "volk.h"
#include "php.h"
#include "util.hpp"
extern "C" {
    void ZEND_FASTCALL physicalDeviceSparseProperties_getResidencyStandard2DMultisampleBlockShape(zend_execute_data *execute_data, zval *return_value) {
        auto* self = storage_get_const<VkPhysicalDeviceSparseProperties>(execute_data);
        RETURN_BOOL(self->residencyStandard2DMultisampleBlockShape);
    }
    void ZEND_FASTCALL physicalDeviceSparseProperties_getResidencyStandard2DBlockShape(zend_execute_data *execute_data, zval *return_value) {
        auto* self = storage_get_const<VkPhysicalDeviceSparseProperties>(execute_data);
        RETURN_BOOL(self->residencyStandard2DBlockShape);
    }
    void ZEND_FASTCALL physicalDeviceSparseProperties_getResidencyStandard3DBlockShape(zend_execute_data *execute_data, zval *return_value) {
        auto* self = storage_get_const<VkPhysicalDeviceSparseProperties>(execute_data);
        RETURN_BOOL(self->residencyStandard3DBlockShape);
    }
    void ZEND_FASTCALL physicalDeviceSparseProperties_getResidencyAlignedMipSize(zend_execute_data *execute_data, zval *return_value) {
        auto* self = storage_get_const<VkPhysicalDeviceSparseProperties>(execute_data);
        RETURN_BOOL(self->residencyAlignedMipSize);
    }
    void ZEND_FASTCALL physicalDeviceSparseProperties_getResidencyNonResidentStrict(zend_execute_data *execute_data, zval *return_value) {
        auto* self = storage_get_const<VkPhysicalDeviceSparseProperties>(execute_data);
        RETURN_BOOL(self->residencyNonResidentStrict);
    }
}