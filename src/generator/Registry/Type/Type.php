<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;
use Generator;

/**
 * @see https://registry.khronos.org/vulkan/specs/1.3/registry.html#tag-type
 */
readonly class Type
{

    public ?string $requires;
    public string $name;
    public ?string $alias;
    public ?TypeDeprecation $deprecated;
    public string $body;

    /**
     * @param DOMElement $element
     * @param array<string,string> $enums
     * @param list<string> $enums64bit
     * @param list<string> $bitmasks
     */
    public final function __construct(DOMElement $element, array $enums, array $enums64bit, array $bitmasks)
    {
        $this->requires = $element->hasAttribute("requires") ? $element->getAttribute("requires") : null;
        $this->name = $element->hasAttribute("name") ? $element->getAttribute("name") : self::findName($element);
        $this->alias = $element->hasAttribute("alias") ? $element->getAttribute("alias") : null;
        $this->deprecated = $element->hasAttribute("deprecated") ?
            TypeDeprecation::from($element->getAttribute("deprecated")) : null;
        $this->body = $element->textContent;
        $this->setUp($element);
        if($this instanceof Enum) {
            $this->setUpEnums($enums, $enums64bit, $bitmasks);
        }
    }

    protected function setUp(DOMElement $element): void
    {

    }

    /**
     * @param DOMElement $root
     * @param array<string,string> $enums
     * @param list<string> $enums64bit
     * @param list<string> $bitmasks
     * @return Generator<self>
     */
    public static function getAll(DOMElement $root, array $enums, array $enums64bit, array $bitmasks): Generator
    {
        foreach($root->childNodes as $childNode) {
            if(!$childNode instanceof DOMElement || $childNode->tagName !== "types") continue;
            foreach($childNode->childNodes as $node) {
                if(!$node instanceof DOMElement || $node->tagName !== "type") continue;
                yield self::from($node, $enums, $enums64bit, $bitmasks);
            }
        }
    }

    // refactor to utility?
    public static function findName(DOMElement $element): ?string
    {
        foreach($element->childNodes as $node) {
            if(!$node instanceof DOMElement) continue;
            if($node->tagName === "name") return $node->textContent;
            $childName = self::findName($node);
            if(!is_null($childName)) return $childName;
        }
        return null;
    }

    /**
     * @param DOMElement $node
     * @param array<string,string> $enums
     * @param list<string> $enums64bit
     * @param list<string> $bitmasks
     * @return self
     */
    private static function from(DOMElement $node, array $enums, array $enums64bit, array $bitmasks): self
    {
        return new (match($node->getAttribute("category")){
            "basetype" => BaseType::class,
            "bitmask" => Bitmask::class,
            "define" => Define::class,
            "enum" => Enum::class,
            "funcpointer" => FuncPointer::class,
            "group" => Group::class,
            "handle" => Handle::class,
            "include" => IncludeType::class,
            "struct" => Struct::class,
            "union" => Union::class,
            "" => self::class,
        })($node, $enums, $enums64bit, $bitmasks);
    }
}