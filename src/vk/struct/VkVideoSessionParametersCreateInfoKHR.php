<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoSessionParametersCreateInfoKHR
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|VkVideoSessionParametersKHR $videoSessionParametersTemplate = null,
        null|VkVideoSessionKHR $videoSession = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoSessionParametersCreateInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($videoSessionParametersTemplate)) $self->setVideoSessionParametersTemplate($videoSessionParametersTemplate);
        if(!is_null($videoSession)) $self->setVideoSession($videoSession);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkVideoSessionParametersCreateFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkVideoSessionParametersKHR/
     */
    public function getVideoSessionParametersTemplate(): VkVideoSessionParametersKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->videoSessionParametersTemplate;
        $phpValue = new \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setVideoSessionParametersTemplate(VkVideoSessionParametersKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->videoSessionParametersTemplate = $cValue;
    }

    /**
     * VkVideoSessionKHR/
     */
    public function getVideoSession(): VkVideoSessionKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->videoSession;
        $phpValue = new \iggyvolz\vulkan\struct\VkVideoSessionKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setVideoSession(VkVideoSessionKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->videoSession = $cValue;
    }
}
