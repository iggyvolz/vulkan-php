<?php

namespace iggyvolz\vulkan\generator\Registry;

use DOMElement;
use Generator;

/**
 * @see https://registry.khronos.org/vulkan/specs/1.3/registry.html#tag-tag
 */
final readonly class Tag
{
    public string $name;
    public string $author;
    public string $contact;
    public function __construct(DOMElement $element)
    {
        $this->name = $element->getAttribute("name");
        $this->author = $element->getAttribute("author");
        $this->contact = $element->getAttribute("contact");
    }

    public static function getAll(DOMElement $root): Generator
    {
        foreach($root->childNodes as $childNode) {
            if(!$childNode instanceof DOMElement || $childNode->tagName !== "tags") continue;
            foreach($childNode->childNodes as $node) {
                if(!$node instanceof DOMElement || $node->tagName !== "tag") continue;
                yield new self($node);
            }
        }
    }
}