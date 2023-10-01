<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;

readonly class UnionMember extends Member
{
    public ?string $selection;
    public function __construct(DOMElement $element)
    {
        parent::__construct($element);
        $this->selection = $element->hasAttribute("selection") ? $element->getAttribute("selection") : null;
    }
}