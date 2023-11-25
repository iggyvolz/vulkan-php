<?php

namespace iggyvolz\vulkan\generator\Transformer;

use iggyvolz\vulkan\util\IntPointer;

abstract readonly class Transformer
{
    public static function get(string $cType): self
    {
        $replacements = [
            "/ +/" => " ",
            "/^ /" => "",
            "/ $/" => "",
            "/ \\[/" => "[",
        ];
        $type = preg_replace(array_keys($replacements), array_values($replacements), $cType);
        // Transform types into native C types
        $type = match ($type) {
            "LPCWSTR" => "const wchar_t*",
            "HANDLE", "HANDLE*", "HINSTANCE", "HMONITOR", "HWND", "MTLCommandQueue_id", "MTLDevice_id" => "void*",
            "DWORD" => "unsigned long",
            // de-Fuchsia and X
            "zx_handle_t", "xcb_window_t" => "uint32_t",
            // Google Stadia stuff - ('-'*ゞ
            "GgpFrameToken", "GgpStreamDescriptor" => "void*",
            default => $type
        };
        $result = match ($type) {
            "VkBool32" => new BoolTransformer(),
            "double" => new PassThroughTransformer("float", "double"),
            "float" => new PassThroughTransformer("float", "float"),
            "int8_t", "char", "char_t" => new PassThroughTransformer("int", "int8_t"),
            "int16_t", "wchar_t", "int" => new PassThroughTransformer("int", "int16_t"),
            "int32_t", "long" => new PassThroughTransformer("int", "int32_t"),
            "int64_t", "long long" => new PassThroughTransformer("int", "int64_t"),
            "uint8_t", "unsigned char" => new PassThroughTransformer("int", "uint8_t"),
            "uint16_t", "unsigned int", "unsigned" => new PassThroughTransformer("int", "uint16_t"),
            "uint32_t", "unsigned long" => new PassThroughTransformer("int", "uint32_t"),
            "uint64_t", "VkDeviceSize", "VkDeviceAddress", "unsigned long long" => new PassThroughTransformer("int", "uint64_t"),
            "size_t" => new PassThroughTransformer("int", "size_t"),
            "uint32_t :24" => new PassThroughTransformer("int", "uint32_t", ":24"),
            "uint32_t :8" => new PassThroughTransformer("int", "uint32_t", ":8"),
            "uint8_t[VK_UUID_SIZE]" => new UuidTransformer(),
            "char[VK_MAX_PHYSICAL_DEVICE_NAME_SIZE]",
            "char[VK_MAX_EXTENSION_NAME_SIZE]",
            "char[VK_MAX_DESCRIPTION_SIZE]",
            "char[VK_MAX_DRIVER_NAME_SIZE]",
            "char[VK_MAX_DRIVER_INFO_SIZE]" => new FixedLengthStringTransformer(256),
            "float[4]" => new Array1DTransformer("float", "float", 4),
            "void" => new VoidTransformer(),
            "VkResult" => new VkResultTransformer(),
            "const int*", "int*" => new IntPointerTransformer("int"),
            "const uint32_t*", "uint32_t*" => new IntPointerTransformer("uint32_t"),
            "const uint64_t*", "uint64_t*" => new IntPointerTransformer("uint64_t"),
            "const size_t*", "size_t*" => new IntPointerTransformer("size_t"),
            "const char*" => new PassThroughTransformer("?string", "const char*"),
            "void**", "void*", "const void* const *", "const void*" => new OpaquePointerTransformer(),
            default => null,
        };
        if(!is_null($result)) return $result;

        // See if it's a struct
        if(str_starts_with($type, "Vk") && class_exists("iggyvolz\\vulkan\\struct\\$type")) {
            return new StructTransformer($type);
        }

        // See if it's an enum
        if(str_starts_with($type, "Vk") && class_exists("iggyvolz\\vulkan\\enum\\$type")) {
            return new EnumTransformer($type);
        }

        if(str_starts_with($type, "Vk") && str_ends_with($type, "*") && class_exists("iggyvolz\\vulkan\\struct\\" . substr($type, 0, -1))) {
            return new PointerTransformer(substr($type, 0, -1));
        }

        if(str_starts_with($type, "const Vk") && str_ends_with($type, "*") && class_exists("iggyvolz\\vulkan\\struct\\" . substr($type, strlen("const "), -1))) {
            // TODO return a const version
            return new PointerTransformer(substr($type, strlen("const "), -1));
        }

        if(str_starts_with($type, "Vk") && str_contains($type, "Flags") && class_exists("iggyvolz\\vulkan\\enum\\" . str_replace("Flags", "FlagBits", $type))) {
            return new FlagsTransformer($type);
        }

        if(str_starts_with($type, "Vk") && str_contains($type, "Flags") && preg_match("/^Vk[A-Za-z0-9]+$/", $type)) {
            return new LonelyFlagsTransformer($type);
        }
//        echo $type . PHP_EOL;
        return new DummyTransformer();
    }

    /**
     * @return string PHP type that will be returned by this
     */
    public abstract function phpType(): string;
    /**
     * @return string PHP type that will be returned by this (to be described in docblock)
     */
    public function phpDocType(): string
    {
        return str_contains($this->phpType(), "\\") ? "\\" . $this->phpType() : $this->phpType();
    }

    /**
     * @return string Prefix that describes the C type returned by this
     */
    public abstract function cTypePrefix(): string;
    /**
     * @return string Suffix that describes the C type returned by this
     */
    public abstract function cTypeSuffix(): string;

    /**
     * @return string PHP code to convert $phpValue of desired type into $cValue of type CData, int, or null using FFI $ffi
     */
    public abstract function toC(): string;

    /**
     * @return string PHP code to convert $cValue of type CData, int, or null into $phpValue of desired type using FFI $ffi
     */
    public abstract function fromC(): string;
}