<?php

namespace iggyvolz\vulkan;

class PhysicalDeviceSparseProperties
{
    private function __construct(){}
    #[\Spem("libphulkan.so", "physicalDeviceSparseProperties_destruct")]
    public function __destruct()
    {
    }
    public function __debugInfo(): ?array
    {
        return [
            'residencyStandard2DBlockShape' => $this->residencyStandard2DBlockShape,
            'residencyStandard2DMultisampleBlockShape' => $this->residencyStandard2DMultisampleBlockShape,
            'residencyStandard3DBlockShape' => $this->residencyStandard3DBlockShape,
            'residencyAlignedMipSize' => $this->residencyAlignedMipSize,
            'residencyNonResidentStrict' => $this->residencyNonResidentStrict,
        ];
    }

    public bool $residencyStandard2DBlockShape { #[\Spem("libphulkan.so", "physicalDeviceSparseProperties_getResidencyStandard2DBlockShape")] get {}}
    public bool $residencyStandard2DMultisampleBlockShape { #[\Spem("libphulkan.so", "physicalDeviceSparseProperties_getResidencyStandard2DMultisampleBlockShape")] get {}}
    public bool $residencyStandard3DBlockShape { #[\Spem("libphulkan.so", "physicalDeviceSparseProperties_getResidencyStandard3DBlockShape")] get {}}
    public bool $residencyAlignedMipSize { #[\Spem("libphulkan.so", "physicalDeviceSparseProperties_getResidencyAlignedMipSize")] get {}}
    public bool $residencyNonResidentStrict { #[\Spem("libphulkan.so", "physicalDeviceSparseProperties_getResidencyNonResidentStrict")] get {}}
}