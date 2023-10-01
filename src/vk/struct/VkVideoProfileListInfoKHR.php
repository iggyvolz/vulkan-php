<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoProfileListInfoKHR
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|int $profileCount = null,
        mixed $pProfiles = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoProfileListInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($profileCount)) $self->setProfileCount($profileCount);
        if(!is_null($pProfiles)) $self->setPProfiles($pProfiles);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getProfileCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->profileCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setProfileCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->profileCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPProfiles(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pProfiles;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPProfiles(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pProfiles = $cValue;
    }
}
