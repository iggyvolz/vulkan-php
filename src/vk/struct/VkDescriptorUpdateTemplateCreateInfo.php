<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorUpdateTemplateCreateInfo
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
        mixed $flags = null,
        null|int $descriptorUpdateEntryCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDescriptorUpdateEntries = null,
        null|\iggyvolz\vulkan\enum\VkDescriptorUpdateTemplateType $templateType = null,
        null|VkDescriptorSetLayout $descriptorSetLayout = null,
        null|\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint = null,
        null|VkPipelineLayout $pipelineLayout = null,
        null|int $set = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorUpdateTemplateCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($descriptorUpdateEntryCount)) $self->setDescriptorUpdateEntryCount($descriptorUpdateEntryCount);
        if(!is_null($pDescriptorUpdateEntries)) $self->setPDescriptorUpdateEntries($pDescriptorUpdateEntries);
        if(!is_null($templateType)) $self->setTemplateType($templateType);
        if(!is_null($descriptorSetLayout)) $self->setDescriptorSetLayout($descriptorSetLayout);
        if(!is_null($pipelineBindPoint)) $self->setPipelineBindPoint($pipelineBindPoint);
        if(!is_null($pipelineLayout)) $self->setPipelineLayout($pipelineLayout);
        if(!is_null($set)) $self->setSet($set);
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
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorUpdateEntryCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorUpdateEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorUpdateEntryCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorUpdateEntryCount = $cValue;
    }

    /**
     * VkDescriptorUpdateTemplateEntry* /
     */
    public function getPDescriptorUpdateEntries(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pDescriptorUpdateEntries;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDescriptorUpdateTemplateEntry', $cValue, $ffi);
        return $phpValue;
    }

    public function setPDescriptorUpdateEntries(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDescriptorUpdateEntries = $cValue;
    }

    /**
     * VkDescriptorUpdateTemplateType/
     */
    public function getTemplateType(): \iggyvolz\vulkan\enum\VkDescriptorUpdateTemplateType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->templateType;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorUpdateTemplateType::from($cValue);
        return $phpValue;
    }

    public function setTemplateType(\iggyvolz\vulkan\enum\VkDescriptorUpdateTemplateType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->templateType = $cValue;
    }

    /**
     * VkDescriptorSetLayout/
     */
    public function getDescriptorSetLayout(): VkDescriptorSetLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSetLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorSetLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setDescriptorSetLayout(VkDescriptorSetLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->descriptorSetLayout = $cValue;
    }

    /**
     * VkPipelineBindPoint/
     */
    public function getPipelineBindPoint(): \iggyvolz\vulkan\enum\VkPipelineBindPoint
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineBindPoint;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineBindPoint::from($cValue);
        return $phpValue;
    }

    public function setPipelineBindPoint(\iggyvolz\vulkan\enum\VkPipelineBindPoint $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->pipelineBindPoint = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getPipelineLayout(): VkPipelineLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setPipelineLayout(VkPipelineLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pipelineLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSet(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->set;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSet(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->set = $cValue;
    }
}
