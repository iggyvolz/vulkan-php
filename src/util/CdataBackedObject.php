<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;
use WeakMap;
use WeakReference;

abstract class CdataBackedObject
{
    public function __construct(
        protected readonly FFI $parent,
        protected readonly CData $cdata,
        public readonly string $type,
    )
    {
        $this->cdatas = new WeakMap();
    }

    /**
     * @var WeakMap<FFI,WeakReference<CData>>
     */
    private WeakMap $cdatas;
    public function getCData(VulkanContext $context): CData
    {
        if($context === $this->parent) {
            return $this->cdata;
        } else {
            /** @var ?CData $cdata */
            $cdata = $this->cdatas[$context]?->get();
            if($cdata) return $cdata;
            $cdata = $context->ffi->cast($this->type, $this->cdata);
            $this->cdatas[$context] = WeakReference::create($cdata);
            return $cdata;
        }
    }
}