<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAmigoProfilingSubmitInfoSEC implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "firstDrawTimestamp" => $this->getFirstDrawTimestamp(),
          "swapBufferTimestamp" => $this->getSwapBufferTimestamp(),
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
        null|int $firstDrawTimestamp = null,
        null|int $swapBufferTimestamp = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAmigoProfilingSubmitInfoSEC', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($firstDrawTimestamp)) $self->setFirstDrawTimestamp($firstDrawTimestamp);
        if(!is_null($swapBufferTimestamp)) $self->setSwapBufferTimestamp($swapBufferTimestamp);
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
     * uint64_t/
     */
    public function getFirstDrawTimestamp(): int
    {
        $cValue = $this->cdata->firstDrawTimestamp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstDrawTimestamp(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->firstDrawTimestamp = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSwapBufferTimestamp(): int
    {
        $cValue = $this->cdata->swapBufferTimestamp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSwapBufferTimestamp(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->swapBufferTimestamp = $cValue;
    }
}
