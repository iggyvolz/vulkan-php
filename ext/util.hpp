#pragma once
#include <php.h>
#include <string>
#include <typeinfo>
#include <variant>
#include<iostream>
#include<zend_enum.h>
#include <zend_interfaces.h>

// TODO add a storage_put_unmanaged for buffers (i.e. things we need alive for the lifetime of the object, but never need to retrieve)
// TODO add a storage_remove_all() (somehow specify things that shouldn't be free()'d?  we need to figure out free vs delete)

void storage_put(uint32_t object_id, const std::type_info& type, void* data);
void storage_put(uint32_t object_id, const std::type_info& type, const void* data);
void* storage_get(uint32_t object_id, const std::type_info& type);
const void* storage_get_const(uint32_t object_id, const std::type_info& type);
void* storage_remove(uint32_t object_id, const std::type_info& type);
void storage_remove_const(uint32_t object_id, const std::type_info& type);

template<typename T>
T* storage_put(uint32_t object_id, T* data) {
    storage_put(object_id, typeid(T), data);
    return data;
}
template<typename T>
T* storage_put(zval zval, T* data) {
    storage_put(Z_OBJ_HANDLE(zval), data);
    return data;
}
template<typename T>
T* storage_put(zval* zval, T* data) {
    storage_put(Z_OBJ_HANDLE_P(zval), data);
    return data;
}
template<typename T>
T* storage_put(zend_execute_data* execute_data, T* data) {
    storage_put(Z_OBJ_HANDLE(execute_data->This), data);
    return data;
}
template<typename T>
const T* storage_put(uint32_t object_id, const T* data) {
    storage_put(object_id, typeid(T), data);
    return data;
}
template<typename T>
const T* storage_put(zval zval, const T* data) {
    storage_put(Z_OBJ_HANDLE(zval), data);
    return data;
}
template<typename T>
const T* storage_put(zval* zval, const T* data) {
    storage_put(Z_OBJ_HANDLE_P(zval), data);
    return data;
}
template<typename T>
const T* storage_put(zend_execute_data* execute_data, const T* data) {
    storage_put(Z_OBJ_HANDLE(execute_data->This), data);
    return data;
}
template<typename T>
T* storage_get(uint32_t object_id) {
    return static_cast<T*>(storage_get(object_id, typeid(T)));
}
template<typename T>
T* storage_get(zval zval) {
    return storage_get<T>(Z_OBJ_HANDLE(zval));
}
template<typename T>
T* storage_get(zval* zval) {
    return storage_get<T>(Z_OBJ_HANDLE_P(zval));
}
template<typename T>
T* storage_get(zend_execute_data* execute_data) {
    return storage_get<T>(execute_data->This);
}
template<typename T>
const T* storage_get_const(uint32_t object_id) {
    return static_cast<const T*>(storage_get_const(object_id, typeid(T)));
}
template<typename T>
const T* storage_get_const(zval zval) {
    return storage_get_const<T>(Z_OBJ_HANDLE(zval));
}
template<typename T>
const T* storage_get_const(zval* zval) {
    return storage_get_const<T>(Z_OBJ_HANDLE_P(zval));
}
template<typename T>
const T* storage_get_const(zend_execute_data* execute_data) {
    return storage_get_const<T>(execute_data->This);
}
template<typename T>
void storage_remove(uint32_t object_id) {
     void* ptr = storage_remove(object_id, typeid(T));
     if (ptr != nullptr) {
        efree(ptr); // TODO how to determine if this should be efree or delete
     }
}
template<typename T>
void storage_remove(zval zval) {
    storage_remove<T>(Z_OBJ_HANDLE(zval));
}
template<typename T>
void storage_remove(zval* zval) {
    storage_remove<T>(Z_OBJ_HANDLE_P(zval));
}
template<typename T>
void storage_remove(zend_execute_data* execute_data) {
    storage_remove<T>(execute_data->This);
}
template<typename T>
void storage_remove_const(uint32_t object_id) {
    // storage_remove_const(object_id, typeid(T));
}
template<typename T>
void storage_remove_const(zval zval) {
    storage_remove_const<T>(Z_OBJ_HANDLE(zval));
}
template<typename T>
void storage_remove_const(zval* zval) {
    storage_remove_const<T>(Z_OBJ_HANDLE_P(zval));
}
template<typename T>
void storage_remove_const(zend_execute_data* execute_data) {
    storage_remove_const<T>(execute_data->This);
}

inline void storage_new(zval* zval, zend_string* classname) {
    zend_class_entry* ce = zend_lookup_class_ex(classname, nullptr, ZEND_FETCH_CLASS_EXCEPTION);
    if (ce) {
        object_init_ex(zval, ce);
    }
}
inline void storage_new(zval* zval, const std::string& classname) {
    storage_new(zval, zend_string_init(classname.c_str(), classname.size(), false));
}
template<typename T>
void storage_new(zval* zval, zend_string* classname, T* data) {
    zend_class_entry* ce = zend_lookup_class_ex(classname, nullptr, ZEND_FETCH_CLASS_EXCEPTION);
    if (ce) {
        object_init_ex(zval, ce);
        storage_put(zval, data);
    }
}
template<typename T>
void storage_new(zval* zval, zend_string* classname, const T* data) {
    zend_class_entry* ce = zend_lookup_class_ex(classname, nullptr, ZEND_FETCH_CLASS_EXCEPTION);
    object_init_ex(zval, ce);
    storage_put(zval, data);
}
template<typename T>
void storage_new(zval* zval, const std::string& classname, T* data) {
    storage_new(zval, zend_string_init(classname.c_str(), classname.size(), false), data);
}
template<typename T>
void storage_new(zval* zval, const std::string& classname, const T* data) {
    storage_new(zval, zend_string_init(classname.c_str(), classname.size(), false), data);
}
inline void enum_get(zval* val, const std::string& classname, const std::variant<std::string, zend_long>& value) {
    zend_string* str = zend_string_init(classname.c_str(), classname.size(), false);
    zend_class_entry* ce;
    if (ce = zend_lookup_class_ex(str, nullptr, ZEND_FETCH_CLASS_EXCEPTION); ce == nullptr) {
        std::cout << "Failed to load class " << classname << std::endl;
        ZVAL_NULL(val);
        return;
    }
    zend_object* o;
    if (std::holds_alternative<zend_long>(value)) {
        zend_long long_value = std::get<zend_long>(value);
        if (zend_enum_get_case_by_value(&o, ce, long_value, nullptr, false) == SUCCESS) {
            ZVAL_OBJ(val, o);
        } else {
            std::cout << "Exception in getting case " << long_value << " from class " << classname << std::endl;
            exit(1);
        }
    } else {
        std::string name = std::get<std::string>(value);
        zend_string *name_str = zend_string_init(name.c_str(), name.size(), false);
        if (zend_enum_get_case_by_value(&o, ce, 0, name_str, false) == SUCCESS) {
            ZVAL_OBJ(val, o);
        } else {
            std::cout << "Exception in getting case " << name << " from class " << classname << std::endl;
            exit(1);
        }
        zend_string_release(name_str);
    }
}

inline void vulkanFail(VkResult result) {
    zend_class_entry *vulkan_exception_ce = zend_lookup_class_ex(
    zend_string_init(ZEND_STRL("iggyvolz\\vulkan\\VulkanException"), false), nullptr,
    ZEND_FETCH_CLASS_EXCEPTION);
    zval result_php;
    ZVAL_LONG(&result_php, result);
    zend_call_method_with_1_params(nullptr, vulkan_exception_ce, nullptr, "assert", nullptr, &result_php);
}

template<typename T>
T* php_new(std::size_t count = 1) {
    return (T*)ecalloc(sizeof(T), count);
}
template<typename T>
T* php_new(T* src) {
    T* val = (T*)emalloc(sizeof(T));
    memcpy(val, src, sizeof(T));
    return val;
}
template<typename T>
T* php_new(T src) {
    T* val = (T*)emalloc(sizeof(T));
    memcpy(val, &src, sizeof(T));
    return val;
}
