<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRayTracingShaderGroupCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "type" => $this->getType(),
          "generalShader" => $this->getGeneralShader(),
          "closestHitShader" => $this->getClosestHitShader(),
          "anyHitShader" => $this->getAnyHitShader(),
          "intersectionShader" => $this->getIntersectionShader(),
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
        null|\iggyvolz\vulkan\enum\VkRayTracingShaderGroupTypeKHR $type = null,
        null|int $generalShader = null,
        null|int $closestHitShader = null,
        null|int $anyHitShader = null,
        null|int $intersectionShader = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRayTracingShaderGroupCreateInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($generalShader)) $self->setGeneralShader($generalShader);
        if(!is_null($closestHitShader)) $self->setClosestHitShader($closestHitShader);
        if(!is_null($anyHitShader)) $self->setAnyHitShader($anyHitShader);
        if(!is_null($intersectionShader)) $self->setIntersectionShader($intersectionShader);
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
     * VkRayTracingShaderGroupTypeKHR/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkRayTracingShaderGroupTypeKHR
    {
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkRayTracingShaderGroupTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkRayTracingShaderGroupTypeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGeneralShader(): int
    {
        $cValue = $this->cdata->generalShader;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGeneralShader(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->generalShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getClosestHitShader(): int
    {
        $cValue = $this->cdata->closestHitShader;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setClosestHitShader(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->closestHitShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAnyHitShader(): int
    {
        $cValue = $this->cdata->anyHitShader;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAnyHitShader(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->anyHitShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIntersectionShader(): int
    {
        $cValue = $this->cdata->intersectionShader;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIntersectionShader(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->intersectionShader = $cValue;
    }
}
