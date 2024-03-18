<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugUtilsLabelEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pLabelName" => $this->getPLabelName(),
          "color" => $this->getColor(),
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
        ?string $pLabelName = null,
        null|array $color = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugUtilsLabelEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pLabelName)) $self->setPLabelName($pLabelName);
        if(!is_null($color)) $self->setColor($color);
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
     * const char* /
     */
    public function getPLabelName(): ?string
    {
        $cValue = $this->cdata->pLabelName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPLabelName(?string $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pLabelName = $cValue;
    }

    /**
     * float/[4]
     */
    public function getColor(): array
    {
        $cValue = $this->cdata->color;
        $phpValue = [$cValue[0],$cValue[1],$cValue[2],$cValue[3],$cValue[4]];
        return $phpValue;
    }

    public function setColor(array $phpValue): void
    {
        $cValue[0] = $phpValue[0];
        $cValue[1] = $phpValue[1];
        $cValue[2] = $phpValue[2];
        $cValue[3] = $phpValue[3];
        $cValue[4] = $phpValue[4];
        $this->cdata->color = $cValue;
    }
}
