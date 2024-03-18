<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoDecodeUsageInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "videoUsageHints" => $this->getVideoUsageHints(),
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
        null|array $videoUsageHints = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoDecodeUsageInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($videoUsageHints)) $self->setVideoUsageHints($videoUsageHints);
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
     * VkVideoDecodeUsageFlagsKHR/
     */
    public function getVideoUsageHints(): array
    {
        $cValue = $this->cdata->videoUsageHints;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoDecodeUsageFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setVideoUsageHints(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkVideoDecodeUsageFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->videoUsageHints = $cValue;
    }
}
