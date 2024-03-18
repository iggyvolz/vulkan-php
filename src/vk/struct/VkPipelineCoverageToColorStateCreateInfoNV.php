<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCoverageToColorStateCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "coverageToColorEnable" => $this->getCoverageToColorEnable(),
          "coverageToColorLocation" => $this->getCoverageToColorLocation(),
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
        null|array $flags = null,
        null|bool $coverageToColorEnable = null,
        null|int $coverageToColorLocation = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCoverageToColorStateCreateInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($coverageToColorEnable)) $self->setCoverageToColorEnable($coverageToColorEnable);
        if(!is_null($coverageToColorLocation)) $self->setCoverageToColorLocation($coverageToColorLocation);
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
     * VkPipelineCoverageToColorStateCreateFlagsNV/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCoverageToColorEnable(): bool
    {
        $cValue = $this->cdata->coverageToColorEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCoverageToColorEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->coverageToColorEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCoverageToColorLocation(): int
    {
        $cValue = $this->cdata->coverageToColorLocation;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCoverageToColorLocation(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->coverageToColorLocation = $cValue;
    }
}
