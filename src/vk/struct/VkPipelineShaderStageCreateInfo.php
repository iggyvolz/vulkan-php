<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineShaderStageCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "stage" => $this->getStage(),
          "module" => $this->getModule(),
          "pName" => $this->getPName(),
          "pSpecializationInfo" => $this->getPSpecializationInfo(),
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
        null|\iggyvolz\vulkan\enum\VkShaderStageFlagBits $stage = null,
        null|VkShaderModule $module = null,
        ?string $pName = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSpecializationInfo = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineShaderStageCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($stage)) $self->setStage($stage);
        if(!is_null($module)) $self->setModule($module);
        if(!is_null($pName)) $self->setPName($pName);
        if(!is_null($pSpecializationInfo)) $self->setPSpecializationInfo($pSpecializationInfo);
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
     * VkPipelineShaderStageCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineShaderStageCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkPipelineShaderStageCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkShaderStageFlagBits/
     */
    public function getStage(): \iggyvolz\vulkan\enum\VkShaderStageFlagBits
    {
        $cValue = $this->cdata->stage;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::from($cValue);
        return $phpValue;
    }

    public function setStage(\iggyvolz\vulkan\enum\VkShaderStageFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->stage = $cValue;
    }

    /**
     * VkShaderModule/
     */
    public function getModule(): VkShaderModule
    {
        $cValue = $this->cdata->module;
        $phpValue = new \iggyvolz\vulkan\struct\VkShaderModule($cValue, $ffi);
        return $phpValue;
    }

    public function setModule(VkShaderModule $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->module = $cValue;
    }

    /**
     * const char* /
     */
    public function getPName(): ?string
    {
        $cValue = $this->cdata->pName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPName(?string $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pName = $cValue;
    }

    /**
     * VkSpecializationInfo* /
     */
    public function getPSpecializationInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pSpecializationInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSpecializationInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSpecializationInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSpecializationInfo = $cValue;
    }
}
