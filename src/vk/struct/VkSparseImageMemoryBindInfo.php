<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseImageMemoryBindInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "image" => $this->getImage(),
          "bindCount" => $this->getBindCount(),
          "pBinds" => $this->getPBinds(),
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
        null|VkImage $image = null,
        null|int $bindCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBinds = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseImageMemoryBindInfo', false));
        if(!is_null($image)) $self->setImage($image);
        if(!is_null($bindCount)) $self->setBindCount($bindCount);
        if(!is_null($pBinds)) $self->setPBinds($pBinds);
        return $self;
    }

    /**
     * VkImage/
     */
    public function getImage(): VkImage
    {
        $cValue = $this->cdata->image;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setImage(VkImage $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->image = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBindCount(): int
    {
        $cValue = $this->cdata->bindCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBindCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bindCount = $cValue;
    }

    /**
     * VkSparseImageMemoryBind* /
     */
    public function getPBinds(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pBinds;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSparseImageMemoryBind', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPBinds(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pBinds = $cValue;
    }
}
