<?php

namespace iggyvolz\vulkan;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PhysicalDeviceProperties
{
    private function __construct(){}
    #[\Spem("libphulkan.so", "physicalDeviceProperties_destruct")]
    public function __destruct()
    {
    }

    public function __debugInfo(): ?array
    {
        return [
            "apiVersion" => $this->apiVersion,
            "driverVersion" => $this->driverVersion,
            "vendorID" => $this->vendorID,
            "deviceID" => $this->deviceID,
            "deviceType" => $this->deviceType,
            "deviceName" => $this->deviceName,
            "pipelineCacheUUID" => $this->pipelineCacheUUID,
            "limits" => $this->limits,
            "sparseProperties" => $this->sparseProperties,
            "deviceUUID" => $this->deviceUUID,
            "driverUUID" => $this->driverUUID,
            "deviceLUID" => $this->deviceLUID,
            "deviceNodeMask" => $this->deviceNodeMask,
        ];
    }

    public Version $apiVersion { get {
        return Version::from($this->_apiVersion);
    }}
    private int $_apiVersion { #[\Spem("libphulkan.so", "physicalDeviceProperties_getApiVersion")] get {}}
    public Version $driverVersion { get {
        return Version::from($this->_driverVersion);
    }}
    private int $_driverVersion { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDriverVersion")] get {}}
    public int $vendorID { #[\Spem("libphulkan.so", "physicalDeviceProperties_getVendorID")] get {}}
    public int $deviceID { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDeviceID")] get {}}
    public PhysicalDeviceType $deviceType { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDeviceType")] get {}}
    public string $deviceName { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDeviceName")] get {}}

    public UuidInterface $pipelineCacheUUID { get {
        return Uuid::fromBytes($this->_pipelineCacheUUID);
    }}
    public string $_pipelineCacheUUID { #[\Spem("libphulkan.so", "physicalDeviceProperties_getPipelineCacheUUID")] get {}}

    public PhysicalDeviceLimits $limits { #[\Spem("libphulkan.so", "physicalDeviceProperties_getLimits")]  get {}}
    public PhysicalDeviceSparseProperties $sparseProperties { #[\Spem("libphulkan.so", "physicalDeviceProperties_getSparseProperties")]  get {}}

    public string $deviceUUID { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDeviceUUID")] get {}}
    public string $driverUUID { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDriverUUID")] get {}}
    public ?string $deviceLUID { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDeviceLUID")] get {}}
    public ?int $deviceNodeMask { #[\Spem("libphulkan.so", "physicalDeviceProperties_getDeviceNodeMask")] get {}}
}