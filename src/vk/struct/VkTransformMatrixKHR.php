<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkTransformMatrixKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "matrix" => $this->getMatrix(),
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

    public static function create(\FFI $ffi, mixed $matrix = null): self
    {
        $self = new self( $ffi->new('VkTransformMatrixKHR', false));
        if(!is_null($matrix)) $self->setMatrix($matrix);
        return $self;
    }

    /**
     * void* /
     */
    public function getMatrix(): mixed
    {
        $cValue = $this->cdata->matrix;
        throw new \LogicException("Dummy transformer - float[3][4]!");
        return $phpValue;
    }

    public function setMatrix(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer - float[3][4]!");
        $this->cdata->matrix = $cValue;
    }
}
