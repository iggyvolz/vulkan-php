<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassDependency
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
        null|int $srcSubpass = null,
        null|int $dstSubpass = null,
        mixed $srcStageMask = null,
        mixed $dstStageMask = null,
        mixed $srcAccessMask = null,
        mixed $dstAccessMask = null,
        mixed $dependencyFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassDependency', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcSubpass;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcSubpass(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->srcSubpass = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstSubpass(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstSubpass;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstSubpass(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->dstSubpass = $cValue;
    }

    /**
     * void* /
     */
    public function getSrcStageMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcStageMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSrcStageMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->srcStageMask = $cValue;
    }

    /**
     * void* /
     */
    public function getDstStageMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstStageMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDstStageMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->dstStageMask = $cValue;
    }

    /**
     * void* /
     */
    public function getSrcAccessMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcAccessMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSrcAccessMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->srcAccessMask = $cValue;
    }

    /**
     * void* /
     */
    public function getDstAccessMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstAccessMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDstAccessMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->dstAccessMask = $cValue;
    }

    /**
     * void* /
     */
    public function getDependencyFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dependencyFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDependencyFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->dependencyFlags = $cValue;
    }
}
