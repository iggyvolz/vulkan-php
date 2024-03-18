<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceOpacityMicromapFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "micromap" => $this->getMicromap(),
          "micromapCaptureReplay" => $this->getMicromapCaptureReplay(),
          "micromapHostCommands" => $this->getMicromapHostCommands(),
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
        null|bool $micromap = null,
        null|bool $micromapCaptureReplay = null,
        null|bool $micromapHostCommands = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceOpacityMicromapFeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($micromap)) $self->setMicromap($micromap);
        if(!is_null($micromapCaptureReplay)) $self->setMicromapCaptureReplay($micromapCaptureReplay);
        if(!is_null($micromapHostCommands)) $self->setMicromapHostCommands($micromapHostCommands);
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
     * uint32_t/
     */
    public function getMicromap(): bool
    {
        $cValue = $this->cdata->micromap;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMicromap(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->micromap = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMicromapCaptureReplay(): bool
    {
        $cValue = $this->cdata->micromapCaptureReplay;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMicromapCaptureReplay(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->micromapCaptureReplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMicromapHostCommands(): bool
    {
        $cValue = $this->cdata->micromapHostCommands;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMicromapHostCommands(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->micromapHostCommands = $cValue;
    }
}
