<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPerformanceCounterDescriptionKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "name" => $this->getName(),
          "category" => $this->getCategory(),
          "description" => $this->getDescription(),
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
        null|array $flags = null,
        null|string $name = null,
        null|string $category = null,
        null|string $description = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPerformanceCounterDescriptionKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($name)) $self->setName($name);
        if(!is_null($category)) $self->setCategory($category);
        if(!is_null($description)) $self->setDescription($description);
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
     * VkPerformanceCounterDescriptionFlagsKHR/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceCounterDescriptionFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkPerformanceCounterDescriptionFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * char/[256]
     */
    public function getName(): string
    {
        $cValue = $this->cdata->name;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setName(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->name = $cValue;
    }

    /**
     * char/[256]
     */
    public function getCategory(): string
    {
        $cValue = $this->cdata->category;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setCategory(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->category = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDescription(): string
    {
        $cValue = $this->cdata->description;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDescription(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->description = $cValue;
    }
}
