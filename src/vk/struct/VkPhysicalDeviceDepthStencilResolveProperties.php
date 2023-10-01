<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDepthStencilResolveProperties
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
        mixed $supportedDepthResolveModes = null,
        mixed $supportedStencilResolveModes = null,
        null|bool $independentResolveNone = null,
        null|bool $independentResolve = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDepthStencilResolveProperties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($supportedDepthResolveModes)) $self->setSupportedDepthResolveModes($supportedDepthResolveModes);
        if(!is_null($supportedStencilResolveModes)) $self->setSupportedStencilResolveModes($supportedStencilResolveModes);
        if(!is_null($independentResolveNone)) $self->setIndependentResolveNone($independentResolveNone);
        if(!is_null($independentResolve)) $self->setIndependentResolve($independentResolve);
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
    public function getSupportedDepthResolveModes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedDepthResolveModes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedDepthResolveModes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedDepthResolveModes = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedStencilResolveModes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedStencilResolveModes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedStencilResolveModes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedStencilResolveModes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndependentResolveNone(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->independentResolveNone;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIndependentResolveNone(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->independentResolveNone = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndependentResolve(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->independentResolve;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIndependentResolve(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->independentResolve = $cValue;
    }
}
