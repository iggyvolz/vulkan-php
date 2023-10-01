<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCooperativeMatrixPropertiesNV
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|int $MSize = null,
        null|int $NSize = null,
        null|int $KSize = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeNV $AType = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeNV $BType = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeNV $CType = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeNV $DType = null,
        null|\iggyvolz\vulkan\enum\VkScopeNV $scope = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCooperativeMatrixPropertiesNV', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->MSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->MSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->NSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->NSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getKSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->KSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setKSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->KSize = $cValue;
    }

    /**
     * VkComponentTypeNV/
     */
    public function getAType(): \iggyvolz\vulkan\enum\VkComponentTypeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->AType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeNV::from($cValue);
        return $phpValue;
    }

    public function setAType(\iggyvolz\vulkan\enum\VkComponentTypeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->AType = $cValue;
    }

    /**
     * VkComponentTypeNV/
     */
    public function getBType(): \iggyvolz\vulkan\enum\VkComponentTypeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->BType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeNV::from($cValue);
        return $phpValue;
    }

    public function setBType(\iggyvolz\vulkan\enum\VkComponentTypeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->BType = $cValue;
    }

    /**
     * VkComponentTypeNV/
     */
    public function getCType(): \iggyvolz\vulkan\enum\VkComponentTypeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->CType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeNV::from($cValue);
        return $phpValue;
    }

    public function setCType(\iggyvolz\vulkan\enum\VkComponentTypeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->CType = $cValue;
    }

    /**
     * VkComponentTypeNV/
     */
    public function getDType(): \iggyvolz\vulkan\enum\VkComponentTypeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->DType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeNV::from($cValue);
        return $phpValue;
    }

    public function setDType(\iggyvolz\vulkan\enum\VkComponentTypeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->DType = $cValue;
    }

    /**
     * VkScopeNV/
     */
    public function getScope(): \iggyvolz\vulkan\enum\VkScopeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->scope;
        $phpValue = \iggyvolz\vulkan\enum\VkScopeNV::from($cValue);
        return $phpValue;
    }

    public function setScope(\iggyvolz\vulkan\enum\VkScopeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->scope = $cValue;
    }
}
