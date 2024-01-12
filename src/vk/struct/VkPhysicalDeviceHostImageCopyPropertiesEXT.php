<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceHostImageCopyPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "copySrcLayoutCount" => $this->getCopySrcLayoutCount(),
          "pCopySrcLayouts" => $this->getPCopySrcLayouts(),
          "copyDstLayoutCount" => $this->getCopyDstLayoutCount(),
          "pCopyDstLayouts" => $this->getPCopyDstLayouts(),
          "optimalTilingLayoutUUID" => $this->getOptimalTilingLayoutUUID(),
          "identicalMemoryTypeRequirements" => $this->getIdenticalMemoryTypeRequirements(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $copySrcLayoutCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pCopySrcLayouts = null,
        null|int $copyDstLayoutCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pCopyDstLayouts = null,
        null|\Ramsey\Uuid\UuidInterface $optimalTilingLayoutUUID = null,
        null|bool $identicalMemoryTypeRequirements = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceHostImageCopyPropertiesEXT', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCopySrcLayoutCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->copySrcLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCopySrcLayoutCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->copySrcLayoutCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPCopySrcLayouts(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pCopySrcLayouts;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPCopySrcLayouts(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCopySrcLayouts = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCopyDstLayoutCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->copyDstLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCopyDstLayoutCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->copyDstLayoutCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPCopyDstLayouts(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pCopyDstLayouts;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPCopyDstLayouts(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCopyDstLayouts = $cValue;
    }

    /**
     * uint8_t/[16]
     */
    public function getOptimalTilingLayoutUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->optimalTilingLayoutUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setOptimalTilingLayoutUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->optimalTilingLayoutUUID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdenticalMemoryTypeRequirements(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->identicalMemoryTypeRequirements;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIdenticalMemoryTypeRequirements(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->identicalMemoryTypeRequirements = $cValue;
    }
}
