<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCudaLaunchInfoNV
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkCudaFunctionNV $function = null,
        null|int $gridDimX = null,
        null|int $gridDimY = null,
        null|int $gridDimZ = null,
        null|int $blockDimX = null,
        null|int $blockDimY = null,
        null|int $blockDimZ = null,
        null|int $sharedMemBytes = null,
        null|int $paramCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pParams = null,
        null|int $extraCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pExtras = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCudaLaunchInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($function)) $self->setFunction($function);
        if(!is_null($gridDimX)) $self->setGridDimX($gridDimX);
        if(!is_null($gridDimY)) $self->setGridDimY($gridDimY);
        if(!is_null($gridDimZ)) $self->setGridDimZ($gridDimZ);
        if(!is_null($blockDimX)) $self->setBlockDimX($blockDimX);
        if(!is_null($blockDimY)) $self->setBlockDimY($blockDimY);
        if(!is_null($blockDimZ)) $self->setBlockDimZ($blockDimZ);
        if(!is_null($sharedMemBytes)) $self->setSharedMemBytes($sharedMemBytes);
        if(!is_null($paramCount)) $self->setParamCount($paramCount);
        if(!is_null($pParams)) $self->setPParams($pParams);
        if(!is_null($extraCount)) $self->setExtraCount($extraCount);
        if(!is_null($pExtras)) $self->setPExtras($pExtras);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkCudaFunctionNV/
     */
    public function getFunction(): VkCudaFunctionNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->function;
        $phpValue = new \iggyvolz\vulkan\struct\VkCudaFunctionNV($cValue, $ffi);
        return $phpValue;
    }

    public function setFunction(VkCudaFunctionNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->function = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGridDimX(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gridDimX;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGridDimX(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gridDimX = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGridDimY(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gridDimY;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGridDimY(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gridDimY = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGridDimZ(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gridDimZ;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGridDimZ(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gridDimZ = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBlockDimX(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->blockDimX;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBlockDimX(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->blockDimX = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBlockDimY(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->blockDimY;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBlockDimY(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->blockDimY = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBlockDimZ(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->blockDimZ;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBlockDimZ(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->blockDimZ = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSharedMemBytes(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sharedMemBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSharedMemBytes(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sharedMemBytes = $cValue;
    }

    /**
     * size_t/
     */
    public function getParamCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->paramCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setParamCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->paramCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPParams(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pParams;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPParams(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pParams = $cValue;
    }

    /**
     * size_t/
     */
    public function getExtraCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->extraCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExtraCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->extraCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPExtras(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pExtras;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPExtras(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pExtras = $cValue;
    }
}
