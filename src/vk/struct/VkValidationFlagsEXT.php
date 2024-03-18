<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkValidationFlagsEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "disabledValidationCheckCount" => $this->getDisabledValidationCheckCount(),
          "pDisabledValidationChecks" => $this->getPDisabledValidationChecks(),
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
        null|int $disabledValidationCheckCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pDisabledValidationChecks = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkValidationFlagsEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($disabledValidationCheckCount)) $self->setDisabledValidationCheckCount($disabledValidationCheckCount);
        if(!is_null($pDisabledValidationChecks)) $self->setPDisabledValidationChecks($pDisabledValidationChecks);
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
    public function getDisabledValidationCheckCount(): int
    {
        $cValue = $this->cdata->disabledValidationCheckCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisabledValidationCheckCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->disabledValidationCheckCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPDisabledValidationChecks(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pDisabledValidationChecks;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPDisabledValidationChecks(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDisabledValidationChecks = $cValue;
    }
}
