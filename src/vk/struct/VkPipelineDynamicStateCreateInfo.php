<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineDynamicStateCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "dynamicStateCount" => $this->getDynamicStateCount(),
          "pDynamicStates" => $this->getPDynamicStates(),
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
        null|int $dynamicStateCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pDynamicStates = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineDynamicStateCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($dynamicStateCount)) $self->setDynamicStateCount($dynamicStateCount);
        if(!is_null($pDynamicStates)) $self->setPDynamicStates($pDynamicStates);
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
     * VkPipelineDynamicStateCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDynamicStateCount(): int
    {
        $cValue = $this->cdata->dynamicStateCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDynamicStateCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dynamicStateCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPDynamicStates(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pDynamicStates;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPDynamicStates(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDynamicStates = $cValue;
    }
}
