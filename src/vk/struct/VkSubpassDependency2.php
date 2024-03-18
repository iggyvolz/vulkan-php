<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassDependency2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcSubpass" => $this->getSrcSubpass(),
          "dstSubpass" => $this->getDstSubpass(),
          "srcStageMask" => $this->getSrcStageMask(),
          "dstStageMask" => $this->getDstStageMask(),
          "srcAccessMask" => $this->getSrcAccessMask(),
          "dstAccessMask" => $this->getDstAccessMask(),
          "dependencyFlags" => $this->getDependencyFlags(),
          "viewOffset" => $this->getViewOffset(),
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
        null|int $srcSubpass = null,
        null|int $dstSubpass = null,
        null|array $srcStageMask = null,
        null|array $dstStageMask = null,
        null|array $srcAccessMask = null,
        null|array $dstAccessMask = null,
        null|array $dependencyFlags = null,
        null|int $viewOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassDependency2', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcSubpass)) $self->setSrcSubpass($srcSubpass);
        if(!is_null($dstSubpass)) $self->setDstSubpass($dstSubpass);
        if(!is_null($srcStageMask)) $self->setSrcStageMask($srcStageMask);
        if(!is_null($dstStageMask)) $self->setDstStageMask($dstStageMask);
        if(!is_null($srcAccessMask)) $self->setSrcAccessMask($srcAccessMask);
        if(!is_null($dstAccessMask)) $self->setDstAccessMask($dstAccessMask);
        if(!is_null($dependencyFlags)) $self->setDependencyFlags($dependencyFlags);
        if(!is_null($viewOffset)) $self->setViewOffset($viewOffset);
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
    public function getSrcSubpass(): int
    {
        $cValue = $this->cdata->srcSubpass;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcSubpass(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->srcSubpass = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstSubpass(): int
    {
        $cValue = $this->cdata->dstSubpass;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstSubpass(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstSubpass = $cValue;
    }

    /**
     * VkPipelineStageFlags/
     */
    public function getSrcStageMask(): array
    {
        $cValue = $this->cdata->srcStageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSrcStageMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $this->cdata->srcStageMask = $cValue;
    }

    /**
     * VkPipelineStageFlags/
     */
    public function getDstStageMask(): array
    {
        $cValue = $this->cdata->dstStageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setDstStageMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $this->cdata->dstStageMask = $cValue;
    }

    /**
     * VkAccessFlags/
     */
    public function getSrcAccessMask(): array
    {
        $cValue = $this->cdata->srcAccessMask;
        $phpValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSrcAccessMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::toInt(...$phpValue);
        $this->cdata->srcAccessMask = $cValue;
    }

    /**
     * VkAccessFlags/
     */
    public function getDstAccessMask(): array
    {
        $cValue = $this->cdata->dstAccessMask;
        $phpValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setDstAccessMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::toInt(...$phpValue);
        $this->cdata->dstAccessMask = $cValue;
    }

    /**
     * VkDependencyFlags/
     */
    public function getDependencyFlags(): array
    {
        $cValue = $this->cdata->dependencyFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkDependencyFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setDependencyFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkDependencyFlagBits::toInt(...$phpValue);
        $this->cdata->dependencyFlags = $cValue;
    }

    /**
     * int32_t/
     */
    public function getViewOffset(): int
    {
        $cValue = $this->cdata->viewOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->viewOffset = $cValue;
    }
}
