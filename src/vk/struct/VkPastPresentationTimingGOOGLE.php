<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPastPresentationTimingGOOGLE implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "presentID" => $this->getPresentID(),
          "desiredPresentTime" => $this->getDesiredPresentTime(),
          "actualPresentTime" => $this->getActualPresentTime(),
          "earliestPresentTime" => $this->getEarliestPresentTime(),
          "presentMargin" => $this->getPresentMargin(),
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
        null|int $presentID = null,
        null|int $desiredPresentTime = null,
        null|int $actualPresentTime = null,
        null|int $earliestPresentTime = null,
        null|int $presentMargin = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPastPresentationTimingGOOGLE', false), $vulkan);
        if(!is_null($presentID)) $self->setPresentID($presentID);
        if(!is_null($desiredPresentTime)) $self->setDesiredPresentTime($desiredPresentTime);
        if(!is_null($actualPresentTime)) $self->setActualPresentTime($actualPresentTime);
        if(!is_null($earliestPresentTime)) $self->setEarliestPresentTime($earliestPresentTime);
        if(!is_null($presentMargin)) $self->setPresentMargin($presentMargin);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getPresentID(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->presentID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentID(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->presentID = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDesiredPresentTime(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->desiredPresentTime;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDesiredPresentTime(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->desiredPresentTime = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getActualPresentTime(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->actualPresentTime;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setActualPresentTime(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->actualPresentTime = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getEarliestPresentTime(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->earliestPresentTime;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEarliestPresentTime(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->earliestPresentTime = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPresentMargin(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->presentMargin;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentMargin(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->presentMargin = $cValue;
    }
}
