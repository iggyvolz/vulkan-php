<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;

final readonly class Handle extends Type
{
    public string $parent;
    public string $objtypeenum;
    public function setUp(DOMElement $element):void
    {
        $this->parent = $element->getAttribute("parent");
        $this->objtypeenum = $element->getAttribute("objtypeenum");
    }
}