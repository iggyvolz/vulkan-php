<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkApplicationInfo
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
        ?string $pApplicationName = null,
        null|int $applicationVersion = null,
        ?string $pEngineName = null,
        null|int $engineVersion = null,
        null|int $apiVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkApplicationInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pApplicationName)) $self->setPApplicationName($pApplicationName);
        if(!is_null($applicationVersion)) $self->setApplicationVersion($applicationVersion);
        if(!is_null($pEngineName)) $self->setPEngineName($pEngineName);
        if(!is_null($engineVersion)) $self->setEngineVersion($engineVersion);
        if(!is_null($apiVersion)) $self->setApiVersion($apiVersion);
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
     * const char* /
     */
    public function getPApplicationName(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pApplicationName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPApplicationName(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pApplicationName = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getApplicationVersion(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->applicationVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApplicationVersion(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->applicationVersion = $cValue;
    }

    /**
     * const char* /
     */
    public function getPEngineName(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pEngineName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPEngineName(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pEngineName = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEngineVersion(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->engineVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEngineVersion(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->engineVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getApiVersion(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->apiVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApiVersion(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->apiVersion = $cValue;
    }
}
