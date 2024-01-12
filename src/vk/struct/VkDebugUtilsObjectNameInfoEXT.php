<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugUtilsObjectNameInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "objectType" => $this->getObjectType(),
          "objectHandle" => $this->getObjectHandle(),
          "pObjectName" => $this->getPObjectName(),
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
        null|\iggyvolz\vulkan\enum\VkObjectType $objectType = null,
        null|int $objectHandle = null,
        ?string $pObjectName = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugUtilsObjectNameInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($objectType)) $self->setObjectType($objectType);
        if(!is_null($objectHandle)) $self->setObjectHandle($objectHandle);
        if(!is_null($pObjectName)) $self->setPObjectName($pObjectName);
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
     * VkObjectType/
     */
    public function getObjectType(): \iggyvolz\vulkan\enum\VkObjectType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->objectType;
        $phpValue = \iggyvolz\vulkan\enum\VkObjectType::from($cValue);
        return $phpValue;
    }

    public function setObjectType(\iggyvolz\vulkan\enum\VkObjectType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->objectType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getObjectHandle(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->objectHandle;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObjectHandle(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->objectHandle = $cValue;
    }

    /**
     * const char* /
     */
    public function getPObjectName(): ?string
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pObjectName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPObjectName(?string $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pObjectName = $cValue;
    }
}
