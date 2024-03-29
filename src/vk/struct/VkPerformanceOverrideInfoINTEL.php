<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPerformanceOverrideInfoINTEL implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "type" => $this->getType(),
          "enable" => $this->getEnable(),
          "parameter" => $this->getParameter(),
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
        null|\iggyvolz\vulkan\enum\VkPerformanceOverrideTypeINTEL $type = null,
        null|bool $enable = null,
        null|int $parameter = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPerformanceOverrideInfoINTEL', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($enable)) $self->setEnable($enable);
        if(!is_null($parameter)) $self->setParameter($parameter);
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
     * VkPerformanceOverrideTypeINTEL/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkPerformanceOverrideTypeINTEL
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceOverrideTypeINTEL::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkPerformanceOverrideTypeINTEL $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEnable(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->enable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setEnable(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->enable = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getParameter(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->parameter;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setParameter(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->parameter = $cValue;
    }
}
