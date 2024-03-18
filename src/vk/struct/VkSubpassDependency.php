<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassDependency implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "srcSubpass" => $this->getSrcSubpass(),
          "dstSubpass" => $this->getDstSubpass(),
          "srcStageMask" => $this->getSrcStageMask(),
          "dstStageMask" => $this->getDstStageMask(),
          "srcAccessMask" => $this->getSrcAccessMask(),
          "dstAccessMask" => $this->getDstAccessMask(),
          "dependencyFlags" => $this->getDependencyFlags(),
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
        null|int $srcSubpass = null,
        null|int $dstSubpass = null,
        null|array $srcStageMask = null,
        null|array $dstStageMask = null,
        null|array $srcAccessMask = null,
        null|array $dstAccessMask = null,
        null|array $dependencyFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassDependency', false));
        if(!is_null($srcSubpass)) $self->setSrcSubpass($srcSubpass);
        if(!is_null($dstSubpass)) $self->setDstSubpass($dstSubpass);
        if(!is_null($srcStageMask)) $self->setSrcStageMask($srcStageMask);
        if(!is_null($dstStageMask)) $self->setDstStageMask($dstStageMask);
        if(!is_null($srcAccessMask)) $self->setSrcAccessMask($srcAccessMask);
        if(!is_null($dstAccessMask)) $self->setDstAccessMask($dstAccessMask);
        if(!is_null($dependencyFlags)) $self->setDependencyFlags($dependencyFlags);
        return $self;
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
}
