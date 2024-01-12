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
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, mixed $matrix = null): self
    {
        $self = new self( $vulkan->ffi->new('VkTransformMatrixKHR', false), $vulkan);
        if(!is_null($matrix)) $self->setMatrix($matrix);
        return $self;
    }

    /**
     * void* /
     */
    public function getMatrix(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->matrix;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMatrix(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->matrix = $cValue;
    }
}
