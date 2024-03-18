<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceExtendedDynamicState2FeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "extendedDynamicState2" => $this->getExtendedDynamicState2(),
          "extendedDynamicState2LogicOp" => $this->getExtendedDynamicState2LogicOp(),
          "extendedDynamicState2PatchControlPoints" => $this->getExtendedDynamicState2PatchControlPoints(),
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
        null|bool $extendedDynamicState2 = null,
        null|bool $extendedDynamicState2LogicOp = null,
        null|bool $extendedDynamicState2PatchControlPoints = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceExtendedDynamicState2FeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($extendedDynamicState2)) $self->setExtendedDynamicState2($extendedDynamicState2);
        if(!is_null($extendedDynamicState2LogicOp)) $self->setExtendedDynamicState2LogicOp($extendedDynamicState2LogicOp);
        if(!is_null($extendedDynamicState2PatchControlPoints)) $self->setExtendedDynamicState2PatchControlPoints($extendedDynamicState2PatchControlPoints);
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
    public function getExtendedDynamicState2(): bool
    {
        $cValue = $this->cdata->extendedDynamicState2;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState2(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState2 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState2LogicOp(): bool
    {
        $cValue = $this->cdata->extendedDynamicState2LogicOp;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState2LogicOp(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState2LogicOp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExtendedDynamicState2PatchControlPoints(): bool
    {
        $cValue = $this->cdata->extendedDynamicState2PatchControlPoints;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setExtendedDynamicState2PatchControlPoints(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->extendedDynamicState2PatchControlPoints = $cValue;
    }
}
