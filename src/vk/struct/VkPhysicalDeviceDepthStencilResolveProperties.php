<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDepthStencilResolveProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "supportedDepthResolveModes" => $this->getSupportedDepthResolveModes(),
          "supportedStencilResolveModes" => $this->getSupportedStencilResolveModes(),
          "independentResolveNone" => $this->getIndependentResolveNone(),
          "independentResolve" => $this->getIndependentResolve(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $supportedDepthResolveModes = null,
        null|array $supportedStencilResolveModes = null,
        null|bool $independentResolveNone = null,
        null|bool $independentResolve = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDepthStencilResolveProperties', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkResolveModeFlags/
     */
    public function getSupportedDepthResolveModes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedDepthResolveModes;
        $phpValue = \iggyvolz\vulkan\enum\VkResolveModeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedDepthResolveModes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkResolveModeFlagBits::toInt(...$phpValue);
        $this->cdata->supportedDepthResolveModes = $cValue;
    }

    /**
     * VkResolveModeFlags/
     */
    public function getSupportedStencilResolveModes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedStencilResolveModes;
        $phpValue = \iggyvolz\vulkan\enum\VkResolveModeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedStencilResolveModes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkResolveModeFlagBits::toInt(...$phpValue);
        $this->cdata->supportedStencilResolveModes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndependentResolveNone(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->independentResolveNone;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIndependentResolveNone(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->independentResolveNone = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndependentResolve(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->independentResolve;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIndependentResolve(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->independentResolve = $cValue;
    }
}
