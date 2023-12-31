<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPresentInfoKHR
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkRect2D $srcRect = null,
        null|VkRect2D $dstRect = null,
        null|bool $persistent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPresentInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcRect)) $self->setSrcRect($srcRect);
        if(!is_null($dstRect)) $self->setDstRect($dstRect);
        if(!is_null($persistent)) $self->setPersistent($persistent);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkRect2D/
     */
    public function getSrcRect(): VkRect2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcRect;
        $phpValue = new \iggyvolz\vulkan\struct\VkRect2D($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcRect(VkRect2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcRect = $cValue;
    }

    /**
     * VkRect2D/
     */
    public function getDstRect(): VkRect2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstRect;
        $phpValue = new \iggyvolz\vulkan\struct\VkRect2D($cValue, $ffi);
        return $phpValue;
    }

    public function setDstRect(VkRect2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstRect = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPersistent(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->persistent;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPersistent(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->persistent = $cValue;
    }
}
