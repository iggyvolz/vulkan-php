<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceFaultVendorInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "description" => $this->getDescription(),
          "vendorFaultCode" => $this->getVendorFaultCode(),
          "vendorFaultData" => $this->getVendorFaultData(),
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
        null|string $description = null,
        null|int $vendorFaultCode = null,
        null|int $vendorFaultData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceFaultVendorInfoEXT', false));
        if(!is_null($description)) $self->setDescription($description);
        if(!is_null($vendorFaultCode)) $self->setVendorFaultCode($vendorFaultCode);
        if(!is_null($vendorFaultData)) $self->setVendorFaultData($vendorFaultData);
        return $self;
    }

    /**
     * char/[256]
     */
    public function getDescription(): string
    {
        $cValue = $this->cdata->description;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDescription(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->description = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getVendorFaultCode(): int
    {
        $cValue = $this->cdata->vendorFaultCode;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorFaultCode(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->vendorFaultCode = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getVendorFaultData(): int
    {
        $cValue = $this->cdata->vendorFaultData;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorFaultData(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->vendorFaultData = $cValue;
    }
}
