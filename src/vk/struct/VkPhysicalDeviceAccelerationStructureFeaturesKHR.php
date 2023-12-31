<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceAccelerationStructureFeaturesKHR
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $accelerationStructure = null,
        null|bool $accelerationStructureCaptureReplay = null,
        null|bool $accelerationStructureIndirectBuild = null,
        null|bool $accelerationStructureHostCommands = null,
        null|bool $descriptorBindingAccelerationStructureUpdateAfterBind = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceAccelerationStructureFeaturesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($accelerationStructure)) $self->setAccelerationStructure($accelerationStructure);
        if(!is_null($accelerationStructureCaptureReplay)) $self->setAccelerationStructureCaptureReplay($accelerationStructureCaptureReplay);
        if(!is_null($accelerationStructureIndirectBuild)) $self->setAccelerationStructureIndirectBuild($accelerationStructureIndirectBuild);
        if(!is_null($accelerationStructureHostCommands)) $self->setAccelerationStructureHostCommands($accelerationStructureHostCommands);
        if(!is_null($descriptorBindingAccelerationStructureUpdateAfterBind)) $self->setDescriptorBindingAccelerationStructureUpdateAfterBind($descriptorBindingAccelerationStructureUpdateAfterBind);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAccelerationStructure(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructure;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAccelerationStructure(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->accelerationStructure = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAccelerationStructureCaptureReplay(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructureCaptureReplay;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAccelerationStructureCaptureReplay(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->accelerationStructureCaptureReplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAccelerationStructureIndirectBuild(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructureIndirectBuild;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAccelerationStructureIndirectBuild(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->accelerationStructureIndirectBuild = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAccelerationStructureHostCommands(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructureHostCommands;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAccelerationStructureHostCommands(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->accelerationStructureHostCommands = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingAccelerationStructureUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBindingAccelerationStructureUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingAccelerationStructureUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingAccelerationStructureUpdateAfterBind = $cValue;
    }
}
