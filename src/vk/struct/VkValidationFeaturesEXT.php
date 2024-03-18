<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkValidationFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "enabledValidationFeatureCount" => $this->getEnabledValidationFeatureCount(),
          "pEnabledValidationFeatures" => $this->getPEnabledValidationFeatures(),
          "disabledValidationFeatureCount" => $this->getDisabledValidationFeatureCount(),
          "pDisabledValidationFeatures" => $this->getPDisabledValidationFeatures(),
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
        null|int $enabledValidationFeatureCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pEnabledValidationFeatures = null,
        null|int $disabledValidationFeatureCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pDisabledValidationFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkValidationFeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($enabledValidationFeatureCount)) $self->setEnabledValidationFeatureCount($enabledValidationFeatureCount);
        if(!is_null($pEnabledValidationFeatures)) $self->setPEnabledValidationFeatures($pEnabledValidationFeatures);
        if(!is_null($disabledValidationFeatureCount)) $self->setDisabledValidationFeatureCount($disabledValidationFeatureCount);
        if(!is_null($pDisabledValidationFeatures)) $self->setPDisabledValidationFeatures($pDisabledValidationFeatures);
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
    public function getEnabledValidationFeatureCount(): int
    {
        $cValue = $this->cdata->enabledValidationFeatureCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEnabledValidationFeatureCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->enabledValidationFeatureCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPEnabledValidationFeatures(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pEnabledValidationFeatures;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPEnabledValidationFeatures(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pEnabledValidationFeatures = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDisabledValidationFeatureCount(): int
    {
        $cValue = $this->cdata->disabledValidationFeatureCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisabledValidationFeatureCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->disabledValidationFeatureCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPDisabledValidationFeatures(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pDisabledValidationFeatures;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPDisabledValidationFeatures(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDisabledValidationFeatures = $cValue;
    }
}
