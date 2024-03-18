<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkComputePipelineCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "stage" => $this->getStage(),
          "layout" => $this->getLayout(),
          "basePipelineHandle" => $this->getBasePipelineHandle(),
          "basePipelineIndex" => $this->getBasePipelineIndex(),
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
        null|VkPipelineShaderStageCreateInfo $stage = null,
        null|VkPipelineLayout $layout = null,
        null|VkPipeline $basePipelineHandle = null,
        null|int $basePipelineIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkComputePipelineCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($stage)) $self->setStage($stage);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($basePipelineHandle)) $self->setBasePipelineHandle($basePipelineHandle);
        if(!is_null($basePipelineIndex)) $self->setBasePipelineIndex($basePipelineIndex);
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
     * VkPipelineCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkPipelineCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkPipelineShaderStageCreateInfo/
     */
    public function getStage(): VkPipelineShaderStageCreateInfo
    {
        $cValue = $this->cdata->stage;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineShaderStageCreateInfo($cValue, $ffi);
        return $phpValue;
    }

    public function setStage(VkPipelineShaderStageCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->stage = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getLayout(): VkPipelineLayout
    {
        $cValue = $this->cdata->layout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setLayout(VkPipelineLayout $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->layout = $cValue;
    }

    /**
     * VkPipeline/
     */
    public function getBasePipelineHandle(): VkPipeline
    {
        $cValue = $this->cdata->basePipelineHandle;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipeline($cValue, $ffi);
        return $phpValue;
    }

    public function setBasePipelineHandle(VkPipeline $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->basePipelineHandle = $cValue;
    }

    /**
     * int32_t/
     */
    public function getBasePipelineIndex(): int
    {
        $cValue = $this->cdata->basePipelineIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBasePipelineIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->basePipelineIndex = $cValue;
    }
}
