<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;

readonly class StructMember extends Member
{
    public function __construct(DOMElement $element)
    {
        parent::__construct($element);
    }
}