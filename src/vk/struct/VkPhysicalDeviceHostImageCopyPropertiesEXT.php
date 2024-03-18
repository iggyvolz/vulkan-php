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
        null|string $optimalTilingLayoutUUID = null,
        null|bool $identicalMemoryTypeRequirements = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceHostImageCopyPropertiesEXT', false));
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
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCopySrcLayoutCount(): int
    {
        $cValue = $this->cdata->copySrcLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCopySrcLayoutCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->copySrcLayoutCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPCopySrcLayouts(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pCopySrcLayouts;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPCopySrcLayouts(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pCopySrcLayouts = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCopyDstLayoutCount(): int
    {
        $cValue = $this->cdata->copyDstLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCopyDstLayoutCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->copyDstLayoutCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPCopyDstLayouts(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pCopyDstLayouts;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPCopyDstLayouts(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pCopyDstLayouts = $cValue;
    }

    /**
     * char/[16]
     */
    public function getOptimalTilingLayoutUUID(): string
    {
        $cValue = $this->cdata->optimalTilingLayoutUUID;
        $tempString = \FFI::string($cValue, 16); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setOptimalTilingLayoutUUID(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 16);
        $this->cdata->optimalTilingLayoutUUID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdenticalMemoryTypeRequirements(): bool
    {
        $cValue = $this->cdata->identicalMemoryTypeRequirements;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIdenticalMemoryTypeRequirements(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->identicalMemoryTypeRequirements = $cValue;
    }
}
