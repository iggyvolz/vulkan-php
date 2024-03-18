<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImportMemorySciBufInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "handleType" => $this->getHandleType(),
          "handle" => $this->getHandle(),
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
        null|\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType = null,
        mixed $handle = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImportMemorySciBufInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($handleType)) $self->setHandleType($handleType);
        if(!is_null($handle)) $self->setHandle($handle);
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
     * VkExternalMemoryHandleTypeFlagBits/
     */
    public function getHandleType(): \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits
    {
        $cValue = $this->cdata->handleType;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setHandleType(\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->handleType = $cValue;
    }

    /**
     * void* /
     */
    public function getHandle(): mixed
    {
        $cValue = $this->cdata->handle;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setHandle(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->handle = $cValue;
    }
}
