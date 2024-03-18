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
        $self = new self( $vulkan->ffi->new('VkPastPresentationTimingGOOGLE', false));
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
        $cValue = $this->cdata->presentID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentID(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->presentID = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDesiredPresentTime(): int
    {
        $cValue = $this->cdata->desiredPresentTime;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDesiredPresentTime(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->desiredPresentTime = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getActualPresentTime(): int
    {
        $cValue = $this->cdata->actualPresentTime;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setActualPresentTime(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->actualPresentTime = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getEarliestPresentTime(): int
    {
        $cValue = $this->cdata->earliestPresentTime;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEarliestPresentTime(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->earliestPresentTime = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPresentMargin(): int
    {
        $cValue = $this->cdata->presentMargin;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentMargin(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->presentMargin = $cValue;
    }
}
