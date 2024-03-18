<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceCooperativeMatrixFeaturesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "cooperativeMatrix" => $this->getCooperativeMatrix(),
          "cooperativeMatrixRobustBufferAccess" => $this->getCooperativeMatrixRobustBufferAccess(),
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
        null|bool $cooperativeMatrix = null,
        null|bool $cooperativeMatrixRobustBufferAccess = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceCooperativeMatrixFeaturesKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($cooperativeMatrix)) $self->setCooperativeMatrix($cooperativeMatrix);
        if(!is_null($cooperativeMatrixRobustBufferAccess)) $self->setCooperativeMatrixRobustBufferAccess($cooperativeMatrixRobustBufferAccess);
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
    public function getCooperativeMatrix(): bool
    {
        $cValue = $this->cdata->cooperativeMatrix;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCooperativeMatrix(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->cooperativeMatrix = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCooperativeMatrixRobustBufferAccess(): bool
    {
        $cValue = $this->cdata->cooperativeMatrixRobustBufferAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCooperativeMatrixRobustBufferAccess(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->cooperativeMatrixRobustBufferAccess = $cValue;
    }
}
