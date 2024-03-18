<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPushDescriptorSetWithTemplateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "descriptorUpdateTemplate" => $this->getDescriptorUpdateTemplate(),
          "layout" => $this->getLayout(),
          "set" => $this->getSet(),
          "pData" => $this->getPData(),
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
        null|VkDescriptorUpdateTemplate $descriptorUpdateTemplate = null,
        null|VkPipelineLayout $layout = null,
        null|int $set = null,
        null|\iggyvolz\vulkan\util\Pointer $pData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPushDescriptorSetWithTemplateInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($descriptorUpdateTemplate)) $self->setDescriptorUpdateTemplate($descriptorUpdateTemplate);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($set)) $self->setSet($set);
        if(!is_null($pData)) $self->setPData($pData);
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
     * VkDescriptorUpdateTemplate/
     */
    public function getDescriptorUpdateTemplate(): VkDescriptorUpdateTemplate
    {
        $cValue = $this->cdata->descriptorUpdateTemplate;
        $phpValue = new \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate($cValue, $ffi);
        return $phpValue;
    }

    public function setDescriptorUpdateTemplate(VkDescriptorUpdateTemplate $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->descriptorUpdateTemplate = $cValue;
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
     * uint32_t/
     */
    public function getSet(): int
    {
        $cValue = $this->cdata->set;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSet(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->set = $cValue;
    }

    /**
     * void* /
     */
    public function getPData(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPData(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pData = $cValue;
    }
}
