<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPushConstantsInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "layout" => $this->getLayout(),
          "stageFlags" => $this->getStageFlags(),
          "offset" => $this->getOffset(),
          "size" => $this->getSize(),
          "pValues" => $this->getPValues(),
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
        null|VkPipelineLayout $layout = null,
        null|array $stageFlags = null,
        null|int $offset = null,
        null|int $size = null,
        null|\iggyvolz\vulkan\util\Pointer $pValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPushConstantsInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($stageFlags)) $self->setStageFlags($stageFlags);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($pValues)) $self->setPValues($pValues);
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
     * VkShaderStageFlags/
     */
    public function getStageFlags(): array
    {
        $cValue = $this->cdata->stageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setStageFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->stageFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOffset(): int
    {
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSize(): int
    {
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }

    /**
     * void* /
     */
    public function getPValues(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pValues;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPValues(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pValues = $cValue;
    }
}
