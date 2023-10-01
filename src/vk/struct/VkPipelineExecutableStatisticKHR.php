<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineExecutableStatisticKHR
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
        null|string $name = null,
        null|string $description = null,
        null|\iggyvolz\vulkan\enum\VkPipelineExecutableStatisticFormatKHR $format = null,
        mixed $value = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineExecutableStatisticKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($name)) $self->setName($name);
        if(!is_null($description)) $self->setDescription($description);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($value)) $self->setValue($value);
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
     * char/[256]
     */
    public function getName(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->name;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setName(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->name = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDescription(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->description;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDescription(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->description = $cValue;
    }

    /**
     * VkPipelineExecutableStatisticFormatKHR/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkPipelineExecutableStatisticFormatKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineExecutableStatisticFormatKHR::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkPipelineExecutableStatisticFormatKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * void* /
     */
    public function getValue(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->value;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setValue(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->value = $cValue;
    }
}
