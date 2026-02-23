#include "volk.h"
#include <dlfcn.h>
#include "php.h"
#include "util.hpp"

zend_result minit(int type, int module_number) {
    if (volkInitialize() != VK_SUCCESS) {
        php_error_docref(nullptr, E_WARNING, "Failed to load Vulkan!");
    }
    return SUCCESS;
}

zend_result mshutdown(int type, int module_number) {
    volkFinalize();
    return SUCCESS;
}

extern "C" {
    void ZEND_FASTCALL getVersion(zend_execute_data *execute_data, zval *return_value) {
        RETURN_LONG(volkGetInstanceVersion());
    }


#ifndef ZEND_DEBUG
#define ZEND_DEBUG 0
#endif
    static zend_module_entry module_entry = {
        .size = sizeof(zend_module_entry),
        .zend_api = ZEND_MODULE_API_NO,
        .zend_debug = ZEND_DEBUG,
        .zts = USING_ZTS,
        .name = "phulkan",
        .module_startup_func = minit,
        .module_shutdown_func = mshutdown,
        .version = "0.0.0",
        .build_id = ZEND_MODULE_BUILD_ID,
    };
    ZEND_DLEXPORT zend_module_entry *get_module(void) {
        return &module_entry;
    }
}
