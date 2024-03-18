<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineExecutablePropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stages" => $this->getStages(),
          "name" => $this->getName(),
          "description" => $this->getDescription(),
          "subgroupSize" => $this->getSubgroupSize(),
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
        null|array $stages = null,
        null|string $name = null,
        null|string $description = null,
        null|int $subgroupSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineExecutablePropertiesKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stages)) $self->setStages($stages);
        if(!is_null($name)) $self->setName($name);
        if(!is_null($description)) $self->setDescription($description);
        if(!is_null($subgroupSize)) $self->setSubgroupSize($subgroupSize);
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
     * VkShaderStageFlags/
     */
    public function getStages(): array
    {
        $cValue = $this->cdata->stages;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setStages(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->stages = $cValue;
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

    /**
     * uint32_t/
     */
    public function getSubgroupSize(): int
    {
        $cValue = $this->cdata->subgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubgroupSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->subgroupSize = $cValue;
    }
}
