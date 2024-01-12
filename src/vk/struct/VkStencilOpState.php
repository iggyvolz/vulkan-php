<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkStencilOpState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "failOp" => $this->getFailOp(),
          "passOp" => $this->getPassOp(),
          "depthFailOp" => $this->getDepthFailOp(),
          "compareOp" => $this->getCompareOp(),
          "compareMask" => $this->getCompareMask(),
          "writeMask" => $this->getWriteMask(),
          "reference" => $this->getReference(),
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
        null|\iggyvolz\vulkan\enum\VkStencilOp $failOp = null,
        null|\iggyvolz\vulkan\enum\VkStencilOp $passOp = null,
        null|\iggyvolz\vulkan\enum\VkStencilOp $depthFailOp = null,
        null|\iggyvolz\vulkan\enum\VkCompareOp $compareOp = null,
        null|int $compareMask = null,
        null|int $writeMask = null,
        null|int $reference = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkStencilOpState', false), $vulkan);
        if(!is_null($failOp)) $self->setFailOp($failOp);
        if(!is_null($passOp)) $self->setPassOp($passOp);
        if(!is_null($depthFailOp)) $self->setDepthFailOp($depthFailOp);
        if(!is_null($compareOp)) $self->setCompareOp($compareOp);
        if(!is_null($compareMask)) $self->setCompareMask($compareMask);
        if(!is_null($writeMask)) $self->setWriteMask($writeMask);
        if(!is_null($reference)) $self->setReference($reference);
        return $self;
    }

    /**
     * VkStencilOp/
     */
    public function getFailOp(): \iggyvolz\vulkan\enum\VkStencilOp
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->failOp;
        $phpValue = \iggyvolz\vulkan\enum\VkStencilOp::from($cValue);
        return $phpValue;
    }

    public function setFailOp(\iggyvolz\vulkan\enum\VkStencilOp $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->failOp = $cValue;
    }

    /**
     * VkStencilOp/
     */
    public function getPassOp(): \iggyvolz\vulkan\enum\VkStencilOp
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->passOp;
        $phpValue = \iggyvolz\vulkan\enum\VkStencilOp::from($cValue);
        return $phpValue;
    }

    public function setPassOp(\iggyvolz\vulkan\enum\VkStencilOp $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->passOp = $cValue;
    }

    /**
     * VkStencilOp/
     */
    public function getDepthFailOp(): \iggyvolz\vulkan\enum\VkStencilOp
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->depthFailOp;
        $phpValue = \iggyvolz\vulkan\enum\VkStencilOp::from($cValue);
        return $phpValue;
    }

    public function setDepthFailOp(\iggyvolz\vulkan\enum\VkStencilOp $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->depthFailOp = $cValue;
    }

    /**
     * VkCompareOp/
     */
    public function getCompareOp(): \iggyvolz\vulkan\enum\VkCompareOp
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->compareOp;
        $phpValue = \iggyvolz\vulkan\enum\VkCompareOp::from($cValue);
        return $phpValue;
    }

    public function setCompareOp(\iggyvolz\vulkan\enum\VkCompareOp $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->compareOp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCompareMask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->compareMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCompareMask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->compareMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWriteMask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->writeMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWriteMask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->writeMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getReference(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->reference;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setReference(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->reference = $cValue;
    }
}
