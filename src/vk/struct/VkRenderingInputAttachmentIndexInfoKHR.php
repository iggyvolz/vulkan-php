<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderingInputAttachmentIndexInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "colorAttachmentCount" => $this->getColorAttachmentCount(),
          "pColorAttachmentInputIndices" => $this->getPColorAttachmentInputIndices(),
          "pDepthInputAttachmentIndex" => $this->getPDepthInputAttachmentIndex(),
          "pStencilInputAttachmentIndex" => $this->getPStencilInputAttachmentIndex(),
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
        null|int $colorAttachmentCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pColorAttachmentInputIndices = null,
        null|\iggyvolz\vulkan\util\IntPointer $pDepthInputAttachmentIndex = null,
        null|\iggyvolz\vulkan\util\IntPointer $pStencilInputAttachmentIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderingInputAttachmentIndexInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($colorAttachmentCount)) $self->setColorAttachmentCount($colorAttachmentCount);
        if(!is_null($pColorAttachmentInputIndices)) $self->setPColorAttachmentInputIndices($pColorAttachmentInputIndices);
        if(!is_null($pDepthInputAttachmentIndex)) $self->setPDepthInputAttachmentIndex($pDepthInputAttachmentIndex);
        if(!is_null($pStencilInputAttachmentIndex)) $self->setPStencilInputAttachmentIndex($pStencilInputAttachmentIndex);
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
    public function getColorAttachmentCount(): int
    {
        $cValue = $this->cdata->colorAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setColorAttachmentCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->colorAttachmentCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPColorAttachmentInputIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pColorAttachmentInputIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPColorAttachmentInputIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pColorAttachmentInputIndices = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPDepthInputAttachmentIndex(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pDepthInputAttachmentIndex;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPDepthInputAttachmentIndex(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDepthInputAttachmentIndex = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPStencilInputAttachmentIndex(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pStencilInputAttachmentIndex;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPStencilInputAttachmentIndex(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStencilInputAttachmentIndex = $cValue;
    }
}
