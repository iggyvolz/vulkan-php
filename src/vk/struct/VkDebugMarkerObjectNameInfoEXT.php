<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugMarkerObjectNameInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "objectType" => $this->getObjectType(),
          "object" => $this->getObject(),
          "pObjectName" => $this->getPObjectName(),
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
        null|\iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $objectType = null,
        null|int $object = null,
        ?string $pObjectName = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugMarkerObjectNameInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($objectType)) $self->setObjectType($objectType);
        if(!is_null($object)) $self->setObject($object);
        if(!is_null($pObjectName)) $self->setPObjectName($pObjectName);
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
     * VkDebugReportObjectTypeEXT/
     */
    public function getObjectType(): \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT
    {
        $cValue = $this->cdata->objectType;
        $phpValue = \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setObjectType(\iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->objectType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getObject(): int
    {
        $cValue = $this->cdata->object;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObject(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->object = $cValue;
    }

    /**
     * const char* /
     */
    public function getPObjectName(): ?string
    {
        $cValue = $this->cdata->pObjectName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPObjectName(?string $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pObjectName = $cValue;
    }
}
