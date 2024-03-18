<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShaderModuleCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "codeSize" => $this->getCodeSize(),
          "pCode" => $this->getPCode(),
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
        null|array $flags = null,
        null|int $codeSize = null,
        null|\iggyvolz\vulkan\util\IntPointer $pCode = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShaderModuleCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($codeSize)) $self->setCodeSize($codeSize);
        if(!is_null($pCode)) $self->setPCode($pCode);
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
     * VkShaderModuleCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderModuleCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkShaderModuleCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * size_t/
     */
    public function getCodeSize(): int
    {
        $cValue = $this->cdata->codeSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCodeSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->codeSize = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPCode(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pCode;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPCode(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pCode = $cValue;
    }
}
