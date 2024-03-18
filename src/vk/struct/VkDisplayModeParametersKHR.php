<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayModeParametersKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "visibleRegion" => $this->getVisibleRegion(),
          "refreshRate" => $this->getRefreshRate(),
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
        null|VkExtent2D $visibleRegion = null,
        null|int $refreshRate = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayModeParametersKHR', false));
        if(!is_null($visibleRegion)) $self->setVisibleRegion($visibleRegion);
        if(!is_null($refreshRate)) $self->setRefreshRate($refreshRate);
        return $self;
    }

    /**
     * VkExtent2D/
     */
    public function getVisibleRegion(): VkExtent2D
    {
        $cValue = $this->cdata->visibleRegion;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setVisibleRegion(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->visibleRegion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRefreshRate(): int
    {
        $cValue = $this->cdata->refreshRate;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRefreshRate(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->refreshRate = $cValue;
    }
}
