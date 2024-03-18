<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCooperativeMatrixPropertiesKHR implements \JsonSerializable
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
          "ResultType" => $this->getResultType(),
          "saturatingAccumulation" => $this->getSaturatingAccumulation(),
          "scope" => $this->getScope(),
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
        null|int $MSize = null,
        null|int $NSize = null,
        null|int $KSize = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeKHR $AType = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeKHR $BType = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeKHR $CType = null,
        null|\iggyvolz\vulkan\enum\VkComponentTypeKHR $ResultType = null,
        null|bool $saturatingAccumulation = null,
        null|\iggyvolz\vulkan\enum\VkScopeKHR $scope = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCooperativeMatrixPropertiesKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($MSize)) $self->setMSize($MSize);
        if(!is_null($NSize)) $self->setNSize($NSize);
        if(!is_null($KSize)) $self->setKSize($KSize);
        if(!is_null($AType)) $self->setAType($AType);
        if(!is_null($BType)) $self->setBType($BType);
        if(!is_null($CType)) $self->setCType($CType);
        if(!is_null($ResultType)) $self->setResultType($ResultType);
        if(!is_null($saturatingAccumulation)) $self->setSaturatingAccumulation($saturatingAccumulation);
        if(!is_null($scope)) $self->setScope($scope);
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
    public function getMSize(): int
    {
        $cValue = $this->cdata->MSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->MSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNSize(): int
    {
        $cValue = $this->cdata->NSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->NSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getKSize(): int
    {
        $cValue = $this->cdata->KSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setKSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->KSize = $cValue;
    }

    /**
     * VkComponentTypeKHR/
     */
    public function getAType(): \iggyvolz\vulkan\enum\VkComponentTypeKHR
    {
        $cValue = $this->cdata->AType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setAType(\iggyvolz\vulkan\enum\VkComponentTypeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->AType = $cValue;
    }

    /**
     * VkComponentTypeKHR/
     */
    public function getBType(): \iggyvolz\vulkan\enum\VkComponentTypeKHR
    {
        $cValue = $this->cdata->BType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setBType(\iggyvolz\vulkan\enum\VkComponentTypeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->BType = $cValue;
    }

    /**
     * VkComponentTypeKHR/
     */
    public function getCType(): \iggyvolz\vulkan\enum\VkComponentTypeKHR
    {
        $cValue = $this->cdata->CType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setCType(\iggyvolz\vulkan\enum\VkComponentTypeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->CType = $cValue;
    }

    /**
     * VkComponentTypeKHR/
     */
    public function getResultType(): \iggyvolz\vulkan\enum\VkComponentTypeKHR
    {
        $cValue = $this->cdata->ResultType;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setResultType(\iggyvolz\vulkan\enum\VkComponentTypeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->ResultType = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSaturatingAccumulation(): bool
    {
        $cValue = $this->cdata->saturatingAccumulation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSaturatingAccumulation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->saturatingAccumulation = $cValue;
    }

    /**
     * VkScopeKHR/
     */
    public function getScope(): \iggyvolz\vulkan\enum\VkScopeKHR
    {
        $cValue = $this->cdata->scope;
        $phpValue = \iggyvolz\vulkan\enum\VkScopeKHR::from($cValue);
        return $phpValue;
    }

    public function setScope(\iggyvolz\vulkan\enum\VkScopeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->scope = $cValue;
    }
}
