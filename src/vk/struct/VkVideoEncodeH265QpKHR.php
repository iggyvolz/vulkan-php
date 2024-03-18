<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265QpKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "qpI" => $this->getQpI(),
          "qpP" => $this->getQpP(),
          "qpB" => $this->getQpB(),
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
        null|int $qpI = null,
        null|int $qpP = null,
        null|int $qpB = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265QpKHR', false));
        if(!is_null($qpI)) $self->setQpI($qpI);
        if(!is_null($qpP)) $self->setQpP($qpP);
        if(!is_null($qpB)) $self->setQpB($qpB);
        return $self;
    }

    /**
     * int32_t/
     */
    public function getQpI(): int
    {
        $cValue = $this->cdata->qpI;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQpI(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->qpI = $cValue;
    }

    /**
     * int32_t/
     */
    public function getQpP(): int
    {
        $cValue = $this->cdata->qpP;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQpP(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->qpP = $cValue;
    }

    /**
     * int32_t/
     */
    public function getQpB(): int
    {
        $cValue = $this->cdata->qpB;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQpB(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->qpB = $cValue;
    }
}
