<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMemoryBarrier2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcStageMask" => $this->getSrcStageMask(),
          "srcAccessMask" => $this->getSrcAccessMask(),
          "dstStageMask" => $this->getDstStageMask(),
          "dstAccessMask" => $this->getDstAccessMask(),
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
        null|array $srcStageMask = null,
        null|array $srcAccessMask = null,
        null|array $dstStageMask = null,
        null|array $dstAccessMask = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMemoryBarrier2', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcStageMask)) $self->setSrcStageMask($srcStageMask);
        if(!is_null($srcAccessMask)) $self->setSrcAccessMask($srcAccessMask);
        if(!is_null($dstStageMask)) $self->setDstStageMask($dstStageMask);
        if(!is_null($dstAccessMask)) $self->setDstAccessMask($dstAccessMask);
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
     * VkPipelineStageFlags2/
     */
    public function getSrcStageMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcStageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setSrcStageMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $this->cdata->srcStageMask = $cValue;
    }

    /**
     * VkAccessFlags2/
     */
    public function getSrcAccessMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcAccessMask;
        $phpValue = \iggyvolz\vulkan\enum\VkAccessFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setSrcAccessMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkAccessFlagBits2::toInt(...$phpValue);
        $this->cdata->srcAccessMask = $cValue;
    }

    /**
     * VkPipelineStageFlags2/
     */
    public function getDstStageMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstStageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setDstStageMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $this->cdata->dstStageMask = $cValue;
    }

    /**
     * VkAccessFlags2/
     */
    public function getDstAccessMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstAccessMask;
        $phpValue = \iggyvolz\vulkan\enum\VkAccessFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setDstAccessMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkAccessFlagBits2::toInt(...$phpValue);
        $this->cdata->dstAccessMask = $cValue;
    }
}
