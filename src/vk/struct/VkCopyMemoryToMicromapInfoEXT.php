<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyMemoryToMicromapInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "src" => $this->getSrc(),
          "dst" => $this->getDst(),
          "mode" => $this->getMode(),
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
        mixed $src = null,
        null|VkMicromapEXT $dst = null,
        null|\iggyvolz\vulkan\enum\VkCopyMicromapModeEXT $mode = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyMemoryToMicromapInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($src)) $self->setSrc($src);
        if(!is_null($dst)) $self->setDst($dst);
        if(!is_null($mode)) $self->setMode($mode);
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
     * void* /
     */
    public function getSrc(): mixed
    {
        $cValue = $this->cdata->src;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSrc(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->src = $cValue;
    }

    /**
     * VkMicromapEXT/
     */
    public function getDst(): VkMicromapEXT
    {
        $cValue = $this->cdata->dst;
        $phpValue = new \iggyvolz\vulkan\struct\VkMicromapEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDst(VkMicromapEXT $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->dst = $cValue;
    }

    /**
     * VkCopyMicromapModeEXT/
     */
    public function getMode(): \iggyvolz\vulkan\enum\VkCopyMicromapModeEXT
    {
        $cValue = $this->cdata->mode;
        $phpValue = \iggyvolz\vulkan\enum\VkCopyMicromapModeEXT::from($cValue);
        return $phpValue;
    }

    public function setMode(\iggyvolz\vulkan\enum\VkCopyMicromapModeEXT $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->mode = $cValue;
    }
}
