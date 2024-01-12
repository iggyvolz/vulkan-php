<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDriverProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "driverID" => $this->getDriverID(),
          "driverName" => $this->getDriverName(),
          "driverInfo" => $this->getDriverInfo(),
          "conformanceVersion" => $this->getConformanceVersion(),
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
        null|\iggyvolz\vulkan\enum\VkDriverId $driverID = null,
        null|string $driverName = null,
        null|string $driverInfo = null,
        null|VkConformanceVersion $conformanceVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDriverProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($driverID)) $self->setDriverID($driverID);
        if(!is_null($driverName)) $self->setDriverName($driverName);
        if(!is_null($driverInfo)) $self->setDriverInfo($driverInfo);
        if(!is_null($conformanceVersion)) $self->setConformanceVersion($conformanceVersion);
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
     * VkDriverId/
     */
    public function getDriverID(): \iggyvolz\vulkan\enum\VkDriverId
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->driverID;
        $phpValue = \iggyvolz\vulkan\enum\VkDriverId::from($cValue);
        return $phpValue;
    }

    public function setDriverID(\iggyvolz\vulkan\enum\VkDriverId $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->driverID = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDriverName(): string
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->driverName;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDriverName(string $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->driverName = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDriverInfo(): string
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->driverInfo;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDriverInfo(string $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->driverInfo = $cValue;
    }

    /**
     * VkConformanceVersion/
     */
    public function getConformanceVersion(): VkConformanceVersion
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->conformanceVersion;
        $phpValue = new \iggyvolz\vulkan\struct\VkConformanceVersion($cValue, $ffi);
        return $phpValue;
    }

    public function setConformanceVersion(VkConformanceVersion $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->conformanceVersion = $cValue;
    }
}
