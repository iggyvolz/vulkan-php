<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferConstraintsInfoFUCHSIA implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "createInfo" => $this->getCreateInfo(),
          "requiredFormatFeatures" => $this->getRequiredFormatFeatures(),
          "bufferCollectionConstraints" => $this->getBufferCollectionConstraints(),
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
        null|VkBufferCreateInfo $createInfo = null,
        null|array $requiredFormatFeatures = null,
        mixed $bufferCollectionConstraints = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferConstraintsInfoFUCHSIA', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($createInfo)) $self->setCreateInfo($createInfo);
        if(!is_null($requiredFormatFeatures)) $self->setRequiredFormatFeatures($requiredFormatFeatures);
        if(!is_null($bufferCollectionConstraints)) $self->setBufferCollectionConstraints($bufferCollectionConstraints);
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
     * VkBufferCreateInfo/
     */
    public function getCreateInfo(): VkBufferCreateInfo
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->createInfo;
        $phpValue = new \iggyvolz\vulkan\struct\VkBufferCreateInfo($cValue, $ffi);
        return $phpValue;
    }

    public function setCreateInfo(VkBufferCreateInfo $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->createInfo = $cValue;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getRequiredFormatFeatures(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->requiredFormatFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setRequiredFormatFeatures(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->requiredFormatFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getBufferCollectionConstraints(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferCollectionConstraints;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setBufferCollectionConstraints(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->bufferCollectionConstraints = $cValue;
    }
}
