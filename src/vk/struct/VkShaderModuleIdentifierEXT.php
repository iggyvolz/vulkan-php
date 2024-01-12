<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShaderModuleIdentifierEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "identifierSize" => $this->getIdentifierSize(),
          "identifier" => $this->getIdentifier(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $identifierSize = null,
        mixed $identifier = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShaderModuleIdentifierEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($identifierSize)) $self->setIdentifierSize($identifierSize);
        if(!is_null($identifier)) $self->setIdentifier($identifier);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdentifierSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->identifierSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIdentifierSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->identifierSize = $cValue;
    }

    /**
     * void* /
     */
    public function getIdentifier(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->identifier;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setIdentifier(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->identifier = $cValue;
    }
}
