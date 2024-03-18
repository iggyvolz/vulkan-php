<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCudaFunctionCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "module" => $this->getModule(),
          "pName" => $this->getPName(),
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
        null|VkCudaModuleNV $module = null,
        ?string $pName = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCudaFunctionCreateInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($module)) $self->setModule($module);
        if(!is_null($pName)) $self->setPName($pName);
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
     * VkCudaModuleNV/
     */
    public function getModule(): VkCudaModuleNV
    {
        $cValue = $this->cdata->module;
        $phpValue = new \iggyvolz\vulkan\struct\VkCudaModuleNV($cValue, $ffi);
        return $phpValue;
    }

    public function setModule(VkCudaModuleNV $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->module = $cValue;
    }

    /**
     * const char* /
     */
    public function getPName(): ?string
    {
        $cValue = $this->cdata->pName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPName(?string $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pName = $cValue;
    }
}
