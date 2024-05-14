<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "attachmentCount" => $this->getAttachmentCount(),
          "pAttachments" => $this->getPAttachments(),
          "subpassCount" => $this->getSubpassCount(),
          "pSubpasses" => $this->getPSubpasses(),
          "dependencyCount" => $this->getDependencyCount(),
          "pDependencies" => $this->getPDependencies(),
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
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|int $attachmentCount = null,
        null|VkAttachmentDescription $pAttachments = null,
        null|int $subpassCount = null,
        null|VkSubpassDescription $pSubpasses = null,
        null|int $dependencyCount = null,
        null|VkSubpassDependency $pDependencies = null,
    ): self {
        $self = new self( $ffi->new('VkRenderPassCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($attachmentCount)) $self->setAttachmentCount($attachmentCount);
        if(!is_null($pAttachments)) $self->setPAttachments($pAttachments);
        if(!is_null($subpassCount)) $self->setSubpassCount($subpassCount);
        if(!is_null($pSubpasses)) $self->setPSubpasses($pSubpasses);
        if(!is_null($dependencyCount)) $self->setDependencyCount($dependencyCount);
        if(!is_null($pDependencies)) $self->setPDependencies($pDependencies);
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
     * VkRenderPassCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkRenderPassCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkRenderPassCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAttachmentCount(): int
    {
        $cValue = $this->cdata->attachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachmentCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->attachmentCount = $cValue;
    }

    /**
     * VkAttachmentDescription* /
     */
    public function getPAttachments(): VkAttachmentDescription
    {
        $cValue = $this->cdata->pAttachments;
        $phpValue = new \iggyvolz\vulkan\struct\VkAttachmentDescription($cValue);
        return $phpValue;
    }

    public function setPAttachments(VkAttachmentDescription $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubpassCount(): int
    {
        $cValue = $this->cdata->subpassCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpassCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->subpassCount = $cValue;
    }

    /**
     * VkSubpassDescription* /
     */
    public function getPSubpasses(): VkSubpassDescription
    {
        $cValue = $this->cdata->pSubpasses;
        $phpValue = new \iggyvolz\vulkan\struct\VkSubpassDescription($cValue);
        return $phpValue;
    }

    public function setPSubpasses(VkSubpassDescription $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSubpasses = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDependencyCount(): int
    {
        $cValue = $this->cdata->dependencyCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDependencyCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dependencyCount = $cValue;
    }

    /**
     * VkSubpassDependency* /
     */
    public function getPDependencies(): VkSubpassDependency
    {
        $cValue = $this->cdata->pDependencies;
        $phpValue = new \iggyvolz\vulkan\struct\VkSubpassDependency($cValue);
        return $phpValue;
    }

    public function setPDependencies(VkSubpassDependency $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDependencies = $cValue;
    }
}
