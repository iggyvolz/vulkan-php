<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineMultisampleStateCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "rasterizationSamples" => $this->getRasterizationSamples(),
          "sampleShadingEnable" => $this->getSampleShadingEnable(),
          "minSampleShading" => $this->getMinSampleShading(),
          "pSampleMask" => $this->getPSampleMask(),
          "alphaToCoverageEnable" => $this->getAlphaToCoverageEnable(),
          "alphaToOneEnable" => $this->getAlphaToOneEnable(),
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples = null,
        null|bool $sampleShadingEnable = null,
        null|float $minSampleShading = null,
        null|\iggyvolz\vulkan\util\Pointer $pSampleMask = null,
        null|bool $alphaToCoverageEnable = null,
        null|bool $alphaToOneEnable = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineMultisampleStateCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($rasterizationSamples)) $self->setRasterizationSamples($rasterizationSamples);
        if(!is_null($sampleShadingEnable)) $self->setSampleShadingEnable($sampleShadingEnable);
        if(!is_null($minSampleShading)) $self->setMinSampleShading($minSampleShading);
        if(!is_null($pSampleMask)) $self->setPSampleMask($pSampleMask);
        if(!is_null($alphaToCoverageEnable)) $self->setAlphaToCoverageEnable($alphaToCoverageEnable);
        if(!is_null($alphaToOneEnable)) $self->setAlphaToOneEnable($alphaToOneEnable);
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
     * VkPipelineMultisampleStateCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getRasterizationSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $cValue = $this->cdata->rasterizationSamples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setRasterizationSamples(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->rasterizationSamples = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleShadingEnable(): bool
    {
        $cValue = $this->cdata->sampleShadingEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSampleShadingEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sampleShadingEnable = $cValue;
    }

    /**
     * float/
     */
    public function getMinSampleShading(): float
    {
        $cValue = $this->cdata->minSampleShading;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinSampleShading(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minSampleShading = $cValue;
    }

    /**
     * void* /
     */
    public function getPSampleMask(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pSampleMask;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPSampleMask(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSampleMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAlphaToCoverageEnable(): bool
    {
        $cValue = $this->cdata->alphaToCoverageEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAlphaToCoverageEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->alphaToCoverageEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAlphaToOneEnable(): bool
    {
        $cValue = $this->cdata->alphaToOneEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAlphaToOneEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->alphaToOneEnable = $cValue;
    }
}
