<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkWin32KeyedMutexAcquireReleaseInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "acquireCount" => $this->getAcquireCount(),
          "pAcquireSyncs" => $this->getPAcquireSyncs(),
          "pAcquireKeys" => $this->getPAcquireKeys(),
          "pAcquireTimeoutMilliseconds" => $this->getPAcquireTimeoutMilliseconds(),
          "releaseCount" => $this->getReleaseCount(),
          "pReleaseSyncs" => $this->getPReleaseSyncs(),
          "pReleaseKeys" => $this->getPReleaseKeys(),
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
        null|int $acquireCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pAcquireSyncs = null,
        null|\iggyvolz\vulkan\util\IntPointer $pAcquireKeys = null,
        null|\iggyvolz\vulkan\util\IntPointer $pAcquireTimeoutMilliseconds = null,
        null|int $releaseCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pReleaseSyncs = null,
        null|\iggyvolz\vulkan\util\IntPointer $pReleaseKeys = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkWin32KeyedMutexAcquireReleaseInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($acquireCount)) $self->setAcquireCount($acquireCount);
        if(!is_null($pAcquireSyncs)) $self->setPAcquireSyncs($pAcquireSyncs);
        if(!is_null($pAcquireKeys)) $self->setPAcquireKeys($pAcquireKeys);
        if(!is_null($pAcquireTimeoutMilliseconds)) $self->setPAcquireTimeoutMilliseconds($pAcquireTimeoutMilliseconds);
        if(!is_null($releaseCount)) $self->setReleaseCount($releaseCount);
        if(!is_null($pReleaseSyncs)) $self->setPReleaseSyncs($pReleaseSyncs);
        if(!is_null($pReleaseKeys)) $self->setPReleaseKeys($pReleaseKeys);
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
    public function getAcquireCount(): int
    {
        $cValue = $this->cdata->acquireCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAcquireCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->acquireCount = $cValue;
    }

    /**
     * VkDeviceMemory* /
     */
    public function getPAcquireSyncs(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pAcquireSyncs;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDeviceMemory', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPAcquireSyncs(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAcquireSyncs = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPAcquireKeys(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pAcquireKeys;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPAcquireKeys(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAcquireKeys = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPAcquireTimeoutMilliseconds(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pAcquireTimeoutMilliseconds;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPAcquireTimeoutMilliseconds(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAcquireTimeoutMilliseconds = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getReleaseCount(): int
    {
        $cValue = $this->cdata->releaseCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setReleaseCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->releaseCount = $cValue;
    }

    /**
     * VkDeviceMemory* /
     */
    public function getPReleaseSyncs(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pReleaseSyncs;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDeviceMemory', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPReleaseSyncs(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pReleaseSyncs = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPReleaseKeys(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pReleaseKeys;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPReleaseKeys(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pReleaseKeys = $cValue;
    }
}
