<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPresentTimeGOOGLE implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "presentID" => $this->getPresentID(),
          "desiredPresentTime" => $this->getDesiredPresentTime(),
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
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPresentTimeGOOGLE', false));
        if(!is_null($presentID)) $self->setPresentID($presentID);
        if(!is_null($desiredPresentTime)) $self->setDesiredPresentTime($desiredPresentTime);
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
}
