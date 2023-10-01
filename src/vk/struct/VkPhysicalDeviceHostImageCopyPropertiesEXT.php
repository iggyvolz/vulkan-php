<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceHostImageCopyPropertiesEXT
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
        null|int $copySrcLayoutCount = null,
        mixed $pCopySrcLayouts = null,
        null|int $copyDstLayoutCount = null,
        mixed $pCopyDstLayouts = null,
        null|\Ramsey\Uuid\UuidInterface $optimalTilingLayoutUUID = null,
        null|bool $identicalMemoryTypeRequirements = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceHostImageCopyPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($copySrcLayoutCount)) $self->setCopySrcLayoutCount($copySrcLayoutCount);
        if(!is_null($pCopySrcLayouts)) $self->setPCopySrcLayouts($pCopySrcLayouts);
        if(!is_null($copyDstLayoutCount)) $self->setCopyDstLayoutCount($copyDstLayoutCount);
        if(!is_null($pCopyDstLayouts)) $self->setPCopyDstLayouts($pCopyDstLayouts);
        if(!is_null($optimalTilingLayoutUUID)) $self->setOptimalTilingLayoutUUID($optimalTilingLayoutUUID);
        if(!is_null($identicalMemoryTypeRequirements)) $self->setIdenticalMemoryTypeRequirements($identicalMemoryTypeRequirements);
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
    public function getCopySrcLayoutCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->copySrcLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCopySrcLayoutCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->copySrcLayoutCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPCopySrcLayouts(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCopySrcLayouts;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPCopySrcLayouts(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pCopySrcLayouts = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCopyDstLayoutCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->copyDstLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCopyDstLayoutCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->copyDstLayoutCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPCopyDstLayouts(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCopyDstLayouts;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPCopyDstLayouts(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pCopyDstLayouts = $cValue;
    }

    /**
     * uint8_t/[16]
     */
    public function getOptimalTilingLayoutUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->optimalTilingLayoutUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setOptimalTilingLayoutUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->optimalTilingLayoutUUID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdenticalMemoryTypeRequirements(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->identicalMemoryTypeRequirements;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIdenticalMemoryTypeRequirements(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->identicalMemoryTypeRequirements = $cValue;
    }
}
