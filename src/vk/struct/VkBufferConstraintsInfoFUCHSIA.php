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
        $self = new self( $vulkan->ffi->new('VkBufferConstraintsInfoFUCHSIA', false));
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
     * VkBufferCreateInfo/
     */
    public function getCreateInfo(): VkBufferCreateInfo
    {
        $cValue = $this->cdata->createInfo;
        $phpValue = new \iggyvolz\vulkan\struct\VkBufferCreateInfo($cValue, $ffi);
        return $phpValue;
    }

    public function setCreateInfo(VkBufferCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->createInfo = $cValue;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getRequiredFormatFeatures(): array
    {
        $cValue = $this->cdata->requiredFormatFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setRequiredFormatFeatures(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->requiredFormatFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getBufferCollectionConstraints(): mixed
    {
        $cValue = $this->cdata->bufferCollectionConstraints;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setBufferCollectionConstraints(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->bufferCollectionConstraints = $cValue;
    }
}
