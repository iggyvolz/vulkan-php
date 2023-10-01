<?php

namespace iggyvolz\vulkan\generator\Registry\Command;

use DOMElement;
use iggyvolz\vulkan\generator\Registry\Registry;

final readonly class Parameter
{
    public string $name;
    public string $type;
    public function __construct(DOMElement $element)
    {
        [$this->name, $this->type] = Registry::getTypeAndNameFromCElement($element);
    }
}