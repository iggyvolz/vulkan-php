<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRefreshObjectListKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "objectCount" => $this->getObjectCount(),
          "pObjects" => $this->getPObjects(),
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
        null|int $objectCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pObjects = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRefreshObjectListKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($objectCount)) $self->setObjectCount($objectCount);
        if(!is_null($pObjects)) $self->setPObjects($pObjects);
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
    public function getObjectCount(): int
    {
        $cValue = $this->cdata->objectCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObjectCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->objectCount = $cValue;
    }

    /**
     * VkRefreshObjectKHR* /
     */
    public function getPObjects(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pObjects;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRefreshObjectKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPObjects(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pObjects = $cValue;
    }
}
