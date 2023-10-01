<?php

namespace iggyvolz\vulkan\generator\Registry;

use DOMElement;
use Generator;

/**
 * @see https://registry.khronos.org/vulkan/specs/1.3/registry.html#tag-platform
 */
final readonly class Platform
{
    public string $name;
    public string $protect;
    public function __construct(DOMElement $element)
    {
        $this->name = $element->getAttribute("name");
        $this->protect = $element->getAttribute("protect");
    }

    public static function getAll(DOMElement $root): Generator
    {
        foreach($root->childNodes as $childNode) {
            if(!$childNode instanceof DOMElement || $childNode->tagName !== "platforms") continue;
            foreach($childNode->childNodes as $node) {
                if(!$node instanceof DOMElement || $node->tagName !== "platform") continue;
                yield new self($node);
            }
        }
    }
}