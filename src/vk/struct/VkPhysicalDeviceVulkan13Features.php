<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkan13Features implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "robustImageAccess" => $this->getRobustImageAccess(),
          "inlineUniformBlock" => $this->getInlineUniformBlock(),
          "descriptorBindingInlineUniformBlockUpdateAfterBind" => $this->getDescriptorBindingInlineUniformBlockUpdateAfterBind(),
          "pipelineCreationCacheControl" => $this->getPipelineCreationCacheControl(),
          "privateData" => $this->getPrivateData(),
          "shaderDemoteToHelperInvocation" => $this->getShaderDemoteToHelperInvocation(),
          "shaderTerminateInvocation" => $this->getShaderTerminateInvocation(),
          "subgroupSizeControl" => $this->getSubgroupSizeControl(),
          "computeFullSubgroups" => $this->getComputeFullSubgroups(),
          "synchronization2" => $this->getSynchronization2(),
          "textureCompressionASTC_HDR" => $this->getTextureCompressionASTC_HDR(),
          "shaderZeroInitializeWorkgroupMemory" => $this->getShaderZeroInitializeWorkgroupMemory(),
          "dynamicRendering" => $this->getDynamicRendering(),
          "shaderIntegerDotProduct" => $this->getShaderIntegerDotProduct(),
          "maintenance4" => $this->getMaintenance4(),
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
        null|bool $robustImageAccess = null,
        null|bool $inlineUniformBlock = null,
        null|bool $descriptorBindingInlineUniformBlockUpdateAfterBind = null,
        null|bool $pipelineCreationCacheControl = null,
        null|bool $privateData = null,
        null|bool $shaderDemoteToHelperInvocation = null,
        null|bool $shaderTerminateInvocation = null,
        null|bool $subgroupSizeControl = null,
        null|bool $computeFullSubgroups = null,
        null|bool $synchronization2 = null,
        null|bool $textureCompressionASTC_HDR = null,
        null|bool $shaderZeroInitializeWorkgroupMemory = null,
        null|bool $dynamicRendering = null,
        null|bool $shaderIntegerDotProduct = null,
        null|bool $maintenance4 = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkan13Features', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($robustImageAccess)) $self->setRobustImageAccess($robustImageAccess);
        if(!is_null($inlineUniformBlock)) $self->setInlineUniformBlock($inlineUniformBlock);
        if(!is_null($descriptorBindingInlineUniformBlockUpdateAfterBind)) $self->setDescriptorBindingInlineUniformBlockUpdateAfterBind($descriptorBindingInlineUniformBlockUpdateAfterBind);
        if(!is_null($pipelineCreationCacheControl)) $self->setPipelineCreationCacheControl($pipelineCreationCacheControl);
        if(!is_null($privateData)) $self->setPrivateData($privateData);
        if(!is_null($shaderDemoteToHelperInvocation)) $self->setShaderDemoteToHelperInvocation($shaderDemoteToHelperInvocation);
        if(!is_null($shaderTerminateInvocation)) $self->setShaderTerminateInvocation($shaderTerminateInvocation);
        if(!is_null($subgroupSizeControl)) $self->setSubgroupSizeControl($subgroupSizeControl);
        if(!is_null($computeFullSubgroups)) $self->setComputeFullSubgroups($computeFullSubgroups);
        if(!is_null($synchronization2)) $self->setSynchronization2($synchronization2);
        if(!is_null($textureCompressionASTC_HDR)) $self->setTextureCompressionASTC_HDR($textureCompressionASTC_HDR);
        if(!is_null($shaderZeroInitializeWorkgroupMemory)) $self->setShaderZeroInitializeWorkgroupMemory($shaderZeroInitializeWorkgroupMemory);
        if(!is_null($dynamicRendering)) $self->setDynamicRendering($dynamicRendering);
        if(!is_null($shaderIntegerDotProduct)) $self->setShaderIntegerDotProduct($shaderIntegerDotProduct);
        if(!is_null($maintenance4)) $self->setMaintenance4($maintenance4);
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
     * uint32_t/
     */
    public function getRobustImageAccess(): bool
    {
        $cValue = $this->cdata->robustImageAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRobustImageAccess(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->robustImageAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getInlineUniformBlock(): bool
    {
        $cValue = $this->cdata->inlineUniformBlock;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setInlineUniformBlock(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->inlineUniformBlock = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingInlineUniformBlockUpdateAfterBind(): bool
    {
        $cValue = $this->cdata->descriptorBindingInlineUniformBlockUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingInlineUniformBlockUpdateAfterBind(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingInlineUniformBlockUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineCreationCacheControl(): bool
    {
        $cValue = $this->cdata->pipelineCreationCacheControl;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPipelineCreationCacheControl(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->pipelineCreationCacheControl = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrivateData(): bool
    {
        $cValue = $this->cdata->privateData;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrivateData(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->privateData = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDemoteToHelperInvocation(): bool
    {
        $cValue = $this->cdata->shaderDemoteToHelperInvocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDemoteToHelperInvocation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDemoteToHelperInvocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderTerminateInvocation(): bool
    {
        $cValue = $this->cdata->shaderTerminateInvocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTerminateInvocation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTerminateInvocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubgroupSizeControl(): bool
    {
        $cValue = $this->cdata->subgroupSizeControl;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSubgroupSizeControl(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->subgroupSizeControl = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getComputeFullSubgroups(): bool
    {
        $cValue = $this->cdata->computeFullSubgroups;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setComputeFullSubgroups(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->computeFullSubgroups = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSynchronization2(): bool
    {
        $cValue = $this->cdata->synchronization2;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSynchronization2(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->synchronization2 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTextureCompressionASTC_HDR(): bool
    {
        $cValue = $this->cdata->textureCompressionASTC_HDR;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTextureCompressionASTC_HDR(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->textureCompressionASTC_HDR = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderZeroInitializeWorkgroupMemory(): bool
    {
        $cValue = $this->cdata->shaderZeroInitializeWorkgroupMemory;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderZeroInitializeWorkgroupMemory(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderZeroInitializeWorkgroupMemory = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDynamicRendering(): bool
    {
        $cValue = $this->cdata->dynamicRendering;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDynamicRendering(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->dynamicRendering = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderIntegerDotProduct(): bool
    {
        $cValue = $this->cdata->shaderIntegerDotProduct;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderIntegerDotProduct(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderIntegerDotProduct = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaintenance4(): bool
    {
        $cValue = $this->cdata->maintenance4;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMaintenance4(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->maintenance4 = $cValue;
    }
}
