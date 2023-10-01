<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPresentTimeGOOGLE
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $presentID = null,
        null|int $desiredPresentTime = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPresentTimeGOOGLE', false), $vulkan->ffi);
        if(!is_null($presentID)) $self->setPresentID($presentID);
        if(!is_null($desiredPresentTime)) $self->setDesiredPresentTime($desiredPresentTime);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getPresentID(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentID(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->presentID = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDesiredPresentTime(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->desiredPresentTime;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDesiredPresentTime(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->desiredPresentTime = $cValue;
    }
}
