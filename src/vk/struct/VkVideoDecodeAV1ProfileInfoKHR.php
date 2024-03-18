<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoDecodeAV1ProfileInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stdProfile" => $this->getStdProfile(),
          "filmGrainSupport" => $this->getFilmGrainSupport(),
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
        mixed $stdProfile = null,
        null|bool $filmGrainSupport = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoDecodeAV1ProfileInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stdProfile)) $self->setStdProfile($stdProfile);
        if(!is_null($filmGrainSupport)) $self->setFilmGrainSupport($filmGrainSupport);
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
     * void* /
     */
    public function getStdProfile(): mixed
    {
        $cValue = $this->cdata->stdProfile;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setStdProfile(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->stdProfile = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFilmGrainSupport(): bool
    {
        $cValue = $this->cdata->filmGrainSupport;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFilmGrainSupport(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->filmGrainSupport = $cValue;
    }
}
