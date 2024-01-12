<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSciSyncAttributesInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "clientType" => $this->getClientType(),
          "primitiveType" => $this->getPrimitiveType(),
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
        null|\iggyvolz\vulkan\enum\VkSciSyncClientTypeNV $clientType = null,
        null|\iggyvolz\vulkan\enum\VkSciSyncPrimitiveTypeNV $primitiveType = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSciSyncAttributesInfoNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($clientType)) $self->setClientType($clientType);
        if(!is_null($primitiveType)) $self->setPrimitiveType($primitiveType);
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
     * VkSciSyncClientTypeNV/
     */
    public function getClientType(): \iggyvolz\vulkan\enum\VkSciSyncClientTypeNV
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->clientType;
        $phpValue = \iggyvolz\vulkan\enum\VkSciSyncClientTypeNV::from($cValue);
        return $phpValue;
    }

    public function setClientType(\iggyvolz\vulkan\enum\VkSciSyncClientTypeNV $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->clientType = $cValue;
    }

    /**
     * VkSciSyncPrimitiveTypeNV/
     */
    public function getPrimitiveType(): \iggyvolz\vulkan\enum\VkSciSyncPrimitiveTypeNV
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->primitiveType;
        $phpValue = \iggyvolz\vulkan\enum\VkSciSyncPrimitiveTypeNV::from($cValue);
        return $phpValue;
    }

    public function setPrimitiveType(\iggyvolz\vulkan\enum\VkSciSyncPrimitiveTypeNV $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->primitiveType = $cValue;
    }
}
