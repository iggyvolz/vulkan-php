<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVertexInputAttributeDescription2EXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "location" => $this->getLocation(),
          "binding" => $this->getBinding(),
          "format" => $this->getFormat(),
          "offset" => $this->getOffset(),
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
        null|int $location = null,
        null|int $binding = null,
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|int $offset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVertexInputAttributeDescription2EXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($location)) $self->setLocation($location);
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($offset)) $self->setOffset($offset);
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
    public function getLocation(): int
    {
        $cValue = $this->cdata->location;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLocation(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->location = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBinding(): int
    {
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOffset(): int
    {
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }
}
