<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCooperativeMatrixPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "MSize" => $this->getMSize(),
          "NSize" => $this->getNSize(),
          "KSize" => $this->getKSize(),
          "AType" => $this->getAType(),
          "BType" => $this->getBType(),
          "CType" => $this->getCType(),
          "DType" => $this->getDType(),
          "scope" => $this->getScope(),
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
        null|int $MSize = null,
        null|int $NSize = null,
        null|int $KSize = null,
        mixed $AType = null,
        mixed $BType = null,
        mixed $CType = null,
        mixed $DType = null,
        mixed $scope = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCooperativeMatrixPropertiesNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($MSize)) $self->setMSize($MSize);
        if(!is_null($NSize)) $self->setNSize($NSize);
        if(!is_null($KSize)) $self->setKSize($KSize);
        if(!is_null($AType)) $self->setAType($AType);
        if(!is_null($BType)) $self->setBType($BType);
        if(!is_null($CType)) $self->setCType($CType);
        if(!is_null($DType)) $self->setDType($DType);
        if(!is_null($scope)) $self->setScope($scope);
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
     * uint32_t/
     */
    public function getMSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->MSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->MSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->NSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->NSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getKSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->KSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setKSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->KSize = $cValue;
    }

    /**
     * void* /
     */
    public function getAType(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->AType;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setAType(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->AType = $cValue;
    }

    /**
     * void* /
     */
    public function getBType(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->BType;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setBType(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->BType = $cValue;
    }

    /**
     * void* /
     */
    public function getCType(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->CType;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setCType(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->CType = $cValue;
    }

    /**
     * void* /
     */
    public function getDType(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->DType;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDType(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->DType = $cValue;
    }

    /**
     * void* /
     */
    public function getScope(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->scope;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setScope(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->scope = $cValue;
    }
}
