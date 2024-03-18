<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265SessionCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "useMaxLevelIdc" => $this->getUseMaxLevelIdc(),
          "maxLevelIdc" => $this->getMaxLevelIdc(),
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
        null|bool $useMaxLevelIdc = null,
        mixed $maxLevelIdc = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265SessionCreateInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($useMaxLevelIdc)) $self->setUseMaxLevelIdc($useMaxLevelIdc);
        if(!is_null($maxLevelIdc)) $self->setMaxLevelIdc($maxLevelIdc);
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
    public function getUseMaxLevelIdc(): bool
    {
        $cValue = $this->cdata->useMaxLevelIdc;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUseMaxLevelIdc(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->useMaxLevelIdc = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxLevelIdc(): mixed
    {
        $cValue = $this->cdata->maxLevelIdc;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxLevelIdc(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxLevelIdc = $cValue;
    }
}
