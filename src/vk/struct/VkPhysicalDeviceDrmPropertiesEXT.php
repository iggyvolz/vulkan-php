<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDrmPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "hasPrimary" => $this->getHasPrimary(),
          "hasRender" => $this->getHasRender(),
          "primaryMajor" => $this->getPrimaryMajor(),
          "primaryMinor" => $this->getPrimaryMinor(),
          "renderMajor" => $this->getRenderMajor(),
          "renderMinor" => $this->getRenderMinor(),
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
        null|bool $hasPrimary = null,
        null|bool $hasRender = null,
        null|int $primaryMajor = null,
        null|int $primaryMinor = null,
        null|int $renderMajor = null,
        null|int $renderMinor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDrmPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($hasPrimary)) $self->setHasPrimary($hasPrimary);
        if(!is_null($hasRender)) $self->setHasRender($hasRender);
        if(!is_null($primaryMajor)) $self->setPrimaryMajor($primaryMajor);
        if(!is_null($primaryMinor)) $self->setPrimaryMinor($primaryMinor);
        if(!is_null($renderMajor)) $self->setRenderMajor($renderMajor);
        if(!is_null($renderMinor)) $self->setRenderMinor($renderMinor);
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
    public function getHasPrimary(): bool
    {
        $cValue = $this->cdata->hasPrimary;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setHasPrimary(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->hasPrimary = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHasRender(): bool
    {
        $cValue = $this->cdata->hasRender;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setHasRender(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->hasRender = $cValue;
    }

    /**
     * int64_t/
     */
    public function getPrimaryMajor(): int
    {
        $cValue = $this->cdata->primaryMajor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPrimaryMajor(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->primaryMajor = $cValue;
    }

    /**
     * int64_t/
     */
    public function getPrimaryMinor(): int
    {
        $cValue = $this->cdata->primaryMinor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPrimaryMinor(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->primaryMinor = $cValue;
    }

    /**
     * int64_t/
     */
    public function getRenderMajor(): int
    {
        $cValue = $this->cdata->renderMajor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRenderMajor(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->renderMajor = $cValue;
    }

    /**
     * int64_t/
     */
    public function getRenderMinor(): int
    {
        $cValue = $this->cdata->renderMinor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRenderMinor(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->renderMinor = $cValue;
    }
}
