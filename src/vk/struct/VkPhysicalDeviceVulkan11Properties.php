<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkan11Properties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "deviceUUID" => $this->getDeviceUUID(),
          "driverUUID" => $this->getDriverUUID(),
          "deviceLUID" => $this->getDeviceLUID(),
          "deviceNodeMask" => $this->getDeviceNodeMask(),
          "deviceLUIDValid" => $this->getDeviceLUIDValid(),
          "subgroupSize" => $this->getSubgroupSize(),
          "subgroupSupportedStages" => $this->getSubgroupSupportedStages(),
          "subgroupSupportedOperations" => $this->getSubgroupSupportedOperations(),
          "subgroupQuadOperationsInAllStages" => $this->getSubgroupQuadOperationsInAllStages(),
          "pointClippingBehavior" => $this->getPointClippingBehavior(),
          "maxMultiviewViewCount" => $this->getMaxMultiviewViewCount(),
          "maxMultiviewInstanceIndex" => $this->getMaxMultiviewInstanceIndex(),
          "protectedNoFault" => $this->getProtectedNoFault(),
          "maxPerSetDescriptors" => $this->getMaxPerSetDescriptors(),
          "maxMemoryAllocationSize" => $this->getMaxMemoryAllocationSize(),
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
        null|\Ramsey\Uuid\UuidInterface $deviceUUID = null,
        null|\Ramsey\Uuid\UuidInterface $driverUUID = null,
        mixed $deviceLUID = null,
        null|int $deviceNodeMask = null,
        null|bool $deviceLUIDValid = null,
        null|int $subgroupSize = null,
        null|array $subgroupSupportedStages = null,
        null|array $subgroupSupportedOperations = null,
        null|bool $subgroupQuadOperationsInAllStages = null,
        null|\iggyvolz\vulkan\enum\VkPointClippingBehavior $pointClippingBehavior = null,
        null|int $maxMultiviewViewCount = null,
        null|int $maxMultiviewInstanceIndex = null,
        null|bool $protectedNoFault = null,
        null|int $maxPerSetDescriptors = null,
        null|int $maxMemoryAllocationSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkan11Properties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceUUID)) $self->setDeviceUUID($deviceUUID);
        if(!is_null($driverUUID)) $self->setDriverUUID($driverUUID);
        if(!is_null($deviceLUID)) $self->setDeviceLUID($deviceLUID);
        if(!is_null($deviceNodeMask)) $self->setDeviceNodeMask($deviceNodeMask);
        if(!is_null($deviceLUIDValid)) $self->setDeviceLUIDValid($deviceLUIDValid);
        if(!is_null($subgroupSize)) $self->setSubgroupSize($subgroupSize);
        if(!is_null($subgroupSupportedStages)) $self->setSubgroupSupportedStages($subgroupSupportedStages);
        if(!is_null($subgroupSupportedOperations)) $self->setSubgroupSupportedOperations($subgroupSupportedOperations);
        if(!is_null($subgroupQuadOperationsInAllStages)) $self->setSubgroupQuadOperationsInAllStages($subgroupQuadOperationsInAllStages);
        if(!is_null($pointClippingBehavior)) $self->setPointClippingBehavior($pointClippingBehavior);
        if(!is_null($maxMultiviewViewCount)) $self->setMaxMultiviewViewCount($maxMultiviewViewCount);
        if(!is_null($maxMultiviewInstanceIndex)) $self->setMaxMultiviewInstanceIndex($maxMultiviewInstanceIndex);
        if(!is_null($protectedNoFault)) $self->setProtectedNoFault($protectedNoFault);
        if(!is_null($maxPerSetDescriptors)) $self->setMaxPerSetDescriptors($maxPerSetDescriptors);
        if(!is_null($maxMemoryAllocationSize)) $self->setMaxMemoryAllocationSize($maxMemoryAllocationSize);
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
     * uint8_t/[16]
     */
    public function getDeviceUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setDeviceUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->deviceUUID = $cValue;
    }

    /**
     * uint8_t/[16]
     */
    public function getDriverUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->driverUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setDriverUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->driverUUID = $cValue;
    }

    /**
     * void* /
     */
    public function getDeviceLUID(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceLUID;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDeviceLUID(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->deviceLUID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceNodeMask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceNodeMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceNodeMask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceNodeMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceLUIDValid(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceLUIDValid;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceLUIDValid(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceLUIDValid = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubgroupSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubgroupSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subgroupSize = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getSubgroupSupportedStages(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subgroupSupportedStages;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSubgroupSupportedStages(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->subgroupSupportedStages = $cValue;
    }

    /**
     * VkSubgroupFeatureFlags/
     */
    public function getSubgroupSupportedOperations(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subgroupSupportedOperations;
        $phpValue = \iggyvolz\vulkan\enum\VkSubgroupFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSubgroupSupportedOperations(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSubgroupFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->subgroupSupportedOperations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubgroupQuadOperationsInAllStages(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subgroupQuadOperationsInAllStages;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSubgroupQuadOperationsInAllStages(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->subgroupQuadOperationsInAllStages = $cValue;
    }

    /**
     * VkPointClippingBehavior/
     */
    public function getPointClippingBehavior(): \iggyvolz\vulkan\enum\VkPointClippingBehavior
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pointClippingBehavior;
        $phpValue = \iggyvolz\vulkan\enum\VkPointClippingBehavior::from($cValue);
        return $phpValue;
    }

    public function setPointClippingBehavior(\iggyvolz\vulkan\enum\VkPointClippingBehavior $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->pointClippingBehavior = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMultiviewViewCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxMultiviewViewCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMultiviewViewCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMultiviewViewCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMultiviewInstanceIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxMultiviewInstanceIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMultiviewInstanceIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMultiviewInstanceIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getProtectedNoFault(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->protectedNoFault;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setProtectedNoFault(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->protectedNoFault = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerSetDescriptors(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerSetDescriptors;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerSetDescriptors(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerSetDescriptors = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxMemoryAllocationSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxMemoryAllocationSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMemoryAllocationSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMemoryAllocationSize = $cValue;
    }
}
