<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;
use iggyvolz\vulkan\generator\Registry\Registry;

abstract readonly class Member
{
    public string $name;
    public string $type;
    public ?string $len;
    public ?string $altlen;
    public ?TypeDeprecation $deprecated;
    public bool $externsync;
    public function __construct(DOMElement $element)
    {
        $this->len = $element->hasAttribute("len") ? $element->getAttribute("len") : null;
        $this->altlen = $element->hasAttribute("altlen") ? $element->getAttribute("altlen") : null;
        [$this->name, $this->type] = Registry::getTypeAndNameFromCElement($element);
        $this->deprecated = $element->hasAttribute("deprecated") ? TypeDeprecation::from($element->getAttribute("deprecated")) : null;
        $this->externsync = $element->hasAttribute("externsync");

    }

    /**
     * @param DOMElement $root
     * @return \Generator<self>
     */
    public static function getAll(DOMElement $root): \Generator
    {
        foreach($root->childNodes as $childNode) {
            if(!$childNode instanceof DOMElement || $childNode->tagName !== "member") continue;
            yield new static($childNode);
        }
    }

}