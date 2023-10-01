<?php

namespace iggyvolz\vulkan\generator\Registry\Command;

use DOMElement;
use DOMNode;
use Generator;
use iggyvolz\vulkan\generator\Registry\Registry;

final readonly class Command
{
    public string $name;
    public string $type;
    /** @var list<Parameter> */
    public array $parameters;
    /** @var list<string> */
    public array $availableIn;

    public final function __construct(DOMElement $element)
    {
        $proto = $element->firstElementChild;
        [$this->name, $this->type] = Registry::getTypeAndNameFromCElement($proto);
        $this->parameters = array_map(fn(DOMElement $e) => new Parameter($e), array_values(array_filter(iterator_to_array($element->childNodes), fn($e) => $e instanceof DOMElement && $e->tagName === "param")));
        $this->availableIn = iterator_to_array($this->find($element));
    }

    /**
     * @param DOMElement $element
     * @return Generator<string>
     */
    private function find(DOMElement $element): Generator
    {
        // Figure out where this command is available
        /** @var list<DOMElement> $features */
        $features = array_filter(iterator_to_array($element->ownerDocument->firstElementChild->childNodes), fn(DOMNode $e) => $e instanceof DOMElement && ($e->tagName === "feature"));
        $extensionsElement = array_values(array_filter(iterator_to_array($element->ownerDocument->firstElementChild->childNodes), fn(DOMNode $e) => $e instanceof DOMElement && $e->tagName === "extensions"))[0];
        /** @var list<DOMElement> $extensions */
        $extensions = array_filter(iterator_to_array($extensionsElement->childNodes), fn(DOMNode $e) => $e instanceof DOMElement && ($e->tagName == "extension"));
        /** @var list<DOMElement> $featuresOrExtensions */
        $featuresOrExtensions = array_merge($features, $extensions);
        foreach($featuresOrExtensions as $featureOrExtension) {
            foreach ($featureOrExtension->childNodes as $require) {
                foreach($require->childNodes as $potentialMatch) {
                    if($potentialMatch instanceof DOMElement && $potentialMatch->tagName === "command" && $potentialMatch->getAttribute("name") === $this->name) {
                        yield $featureOrExtension->getAttribute("name");
                    }
                }
            }
        }
    }

    public static function getAll(DOMElement $root): Generator
    {
        foreach($root->childNodes as $childNode) {
            if(!$childNode instanceof DOMElement || $childNode->tagName !== "commands") continue;
            foreach($childNode->childNodes as $node) {
                if(!$node instanceof DOMElement || $node->tagName !== "command" || $node->getAttribute("alias") !== "") continue;
                yield new self($node);
            }
        }
    }


}