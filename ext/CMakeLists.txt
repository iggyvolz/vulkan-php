cmake_minimum_required(VERSION 4.2)
project(phulkan)

set(CMAKE_CXX_STANDARD 26)
set(CMAKE_POSITION_INDEPENDENT_CODE ON)
include(FetchContent)
FetchContent_Declare(
        volk
        GIT_REPOSITORY https://github.com/zeux/volk.git
)
FetchContent_MakeAvailable(volk)

set(PHP_ROOT CACHE PATH "Path to PHP installation directory")

include_directories(
        ${PHP_ROOT}/include/php
        ${PHP_ROOT}/include/php/main
        ${PHP_ROOT}/include/php/TSRM
        ${PHP_ROOT}/include/php/Zend
        ${PHP_ROOT}/include/php/ext
        ${PHP_ROOT}/include/php/ext/date/lib
        ${PHP_ROOT}/include
        ${PHP_ROOT}/include/main
        ${PHP_ROOT}/include/TSRM
        ${PHP_ROOT}/include/Zend
        ${PHP_ROOT}/include/ext
        ${PHP_ROOT}/include/ext/date/lib
)

if (WIN32)
    link_directories(${PHP_ROOT}/lib)
endif ()
add_library(phulkan SHARED
        main.cpp
        util.hpp
        volk.cpp
        layer.cpp
        extension.cpp
        instance.cpp
        physicalDevice.cpp
        volk.hpp
        physicalDeviceLimits.cpp
        physicalDeviceSparseProperties.cpp
        physicalDeviceProperties.cpp
)
if(WIN32)
    target_compile_definitions(phulkan PRIVATE ZEND_WIN32 PHP_WIN32)
    target_link_libraries(phulkan PRIVATE php8)
endif()
target_link_libraries(phulkan PRIVATE volk)