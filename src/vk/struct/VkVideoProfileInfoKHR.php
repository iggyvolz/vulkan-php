<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoProfileInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "videoCodecOperation" => $this->getVideoCodecOperation(),
          "chromaSubsampling" => $this->getChromaSubsampling(),
          "lumaBitDepth" => $this->getLumaBitDepth(),
          "chromaBitDepth" => $this->getChromaBitDepth(),
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
        null|\iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR $videoCodecOperation = null,
        null|array $chromaSubsampling = null,
        null|array $lumaBitDepth = null,
        null|array $chromaBitDepth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoProfileInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($videoCodecOperation)) $self->setVideoCodecOperation($videoCodecOperation);
        if(!is_null($chromaSubsampling)) $self->setChromaSubsampling($chromaSubsampling);
        if(!is_null($lumaBitDepth)) $self->setLumaBitDepth($lumaBitDepth);
        if(!is_null($chromaBitDepth)) $self->setChromaBitDepth($chromaBitDepth);
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
     * VkVideoCodecOperationFlagBitsKHR/
     */
    public function getVideoCodecOperation(): \iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->videoCodecOperation;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setVideoCodecOperation(\iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->videoCodecOperation = $cValue;
    }

    /**
     * VkVideoChromaSubsamplingFlagsKHR/
     */
    public function getChromaSubsampling(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->chromaSubsampling;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoChromaSubsamplingFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setChromaSubsampling(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoChromaSubsamplingFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->chromaSubsampling = $cValue;
    }

    /**
     * VkVideoComponentBitDepthFlagsKHR/
     */
    public function getLumaBitDepth(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->lumaBitDepth;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoComponentBitDepthFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setLumaBitDepth(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoComponentBitDepthFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->lumaBitDepth = $cValue;
    }

    /**
     * VkVideoComponentBitDepthFlagsKHR/
     */
    public function getChromaBitDepth(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->chromaBitDepth;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoComponentBitDepthFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setChromaBitDepth(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoComponentBitDepthFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->chromaBitDepth = $cValue;
    }
}
