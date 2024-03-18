<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImportSemaphoreFdInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "semaphore" => $this->getSemaphore(),
          "flags" => $this->getFlags(),
          "handleType" => $this->getHandleType(),
          "fd" => $this->getFd(),
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
        null|VkSemaphore $semaphore = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits $handleType = null,
        null|int $fd = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImportSemaphoreFdInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($semaphore)) $self->setSemaphore($semaphore);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($handleType)) $self->setHandleType($handleType);
        if(!is_null($fd)) $self->setFd($fd);
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
     * VkSemaphore/
     */
    public function getSemaphore(): VkSemaphore
    {
        $cValue = $this->cdata->semaphore;
        $phpValue = new \iggyvolz\vulkan\struct\VkSemaphore($cValue, $ffi);
        return $phpValue;
    }

    public function setSemaphore(VkSemaphore $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->semaphore = $cValue;
    }

    /**
     * VkSemaphoreImportFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSemaphoreImportFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkSemaphoreImportFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkExternalSemaphoreHandleTypeFlagBits/
     */
    public function getHandleType(): \iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits
    {
        $cValue = $this->cdata->handleType;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setHandleType(\iggyvolz\vulkan\enum\VkExternalSemaphoreHandleTypeFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->handleType = $cValue;
    }

    /**
     * int16_t/
     */
    public function getFd(): int
    {
        $cValue = $this->cdata->fd;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFd(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->fd = $cValue;
    }
}
