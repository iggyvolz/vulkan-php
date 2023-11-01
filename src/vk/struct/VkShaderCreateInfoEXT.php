<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShaderCreateInfoEXT
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkShaderStageFlagBits $stage = null,
        null|array $nextStage = null,
        null|\iggyvolz\vulkan\enum\VkShaderCodeTypeEXT $codeType = null,
        null|int $codeSize = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pCode = null,
        ?string $pName = null,
        null|int $setLayoutCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSetLayouts = null,
        null|int $pushConstantRangeCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPushConstantRanges = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSpecializationInfo = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShaderCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($stage)) $self->setStage($stage);
        if(!is_null($nextStage)) $self->setNextStage($nextStage);
        if(!is_null($codeType)) $self->setCodeType($codeType);
        if(!is_null($codeSize)) $self->setCodeSize($codeSize);
        if(!is_null($pCode)) $self->setPCode($pCode);
        if(!is_null($pName)) $self->setPName($pName);
        if(!is_null($setLayoutCount)) $self->setSetLayoutCount($setLayoutCount);
        if(!is_null($pSetLayouts)) $self->setPSetLayouts($pSetLayouts);
        if(!is_null($pushConstantRangeCount)) $self->setPushConstantRangeCount($pushConstantRangeCount);
        if(!is_null($pPushConstantRanges)) $self->setPPushConstantRanges($pPushConstantRanges);
        if(!is_null($pSpecializationInfo)) $self->setPSpecializationInfo($pSpecializationInfo);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkShaderCreateFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderCreateFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderCreateFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkShaderStageFlagBits/
     */
    public function getStage(): \iggyvolz\vulkan\enum\VkShaderStageFlagBits
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stage;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::from($cValue);
        return $phpValue;
    }

    public function setStage(\iggyvolz\vulkan\enum\VkShaderStageFlagBits $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->stage = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getNextStage(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->nextStage;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setNextStage(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->nextStage = $cValue;
    }

    /**
     * VkShaderCodeTypeEXT/
     */
    public function getCodeType(): \iggyvolz\vulkan\enum\VkShaderCodeTypeEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->codeType;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderCodeTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setCodeType(\iggyvolz\vulkan\enum\VkShaderCodeTypeEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->codeType = $cValue;
    }

    /**
     * size_t/
     */
    public function getCodeSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->codeSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCodeSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->codeSize = $cValue;
    }

    /**
     * void* /
     */
    public function getPCode(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCode;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPCode(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCode = $cValue;
    }

    /**
     * const char* /
     */
    public function getPName(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPName(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pName = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSetLayoutCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->setLayoutCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSetLayoutCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->setLayoutCount = $cValue;
    }

    /**
     * VkDescriptorSetLayout* /
     */
    public function getPSetLayouts(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSetLayouts;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorSetLayout', $cValue, $ffi);
        return $phpValue;
    }

    public function setPSetLayouts(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSetLayouts = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPushConstantRangeCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pushConstantRangeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPushConstantRangeCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pushConstantRangeCount = $cValue;
    }

    /**
     * VkPushConstantRange* /
     */
    public function getPPushConstantRanges(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPushConstantRanges;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPushConstantRange', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPushConstantRanges(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPushConstantRanges = $cValue;
    }

    /**
     * VkSpecializationInfo* /
     */
    public function getPSpecializationInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSpecializationInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSpecializationInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPSpecializationInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSpecializationInfo = $cValue;
    }
}
