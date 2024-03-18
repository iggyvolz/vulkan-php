<?php

namespace iggyvolz\vulkan\generator\Registry;

use DOMDocument;
use DOMElement;
use DOMNode;
use Generator;
use iggyvolz\vulkan\generator\Registry\Command\Command;
use iggyvolz\vulkan\generator\Registry\Type\Type;
use iggyvolz\vulkan\generator\VulkanVariant;

/**
 * @see https://registry.khronos.org/vulkan/specs/1.3/registry.html#schema:root
 */
final readonly class Registry
{
    /**
     * @var list<Platform>
     */
    public array $platforms;
    /**
     * @var list<Tag>
     */
    public array $tags;
    /**
     * @var list<Type>
     */
    public array $types;
    /**
     * @var array<string,string>
     */
    public array $defines;
    /** @var list<Command> */
    public array $commands;
    public function __construct(DOMElement $root)
    {
        $this->platforms = iterator_to_array(Platform::getAll($root));
        $this->tags = iterator_to_array(Tag::getAll($root));
        // <enums> tags either are defines or enum values
        $enums = [];
        $enums64Bit = [];
        $enumsBitmask = [];
        foreach($root->childNodes as $childNode) {
            $enums[$enumName ?? ""] ??= [];
            if(!$childNode instanceof DOMElement || $childNode->nodeName !== "enums") continue;
            $enumName = $childNode->hasAttribute("type") ? $childNode->getAttribute("name") : null;
            $isBitmask = ($childNode->getAttribute("type") === "bitmask");
            if($isBitmask) {
                $enumsBitmask[] = $enumName;
            }
            if($childNode->getAttribute("bitwidth") === "64") $enums64Bit[] = $enumName;
            $processEnumNode = function(DOMElement $enumNode, int $defaultExtensionNumber = 0) use($isBitmask, $enumName, &$enums){
                $value = $isBitmask ? $enumNode->getAttribute("bitpos") : $enumNode->getAttribute("value");
                if($value === "" && $enumNode->hasAttribute("offset")) {
                    $extensionNumber = intval($enumNode->hasAttribute("extnumber") ? $enumNode->getAttribute("extnumber") : $defaultExtensionNumber);
                    $offset = intval($enumNode->getAttribute("offset"));
                    $value = strval(1000000000 + (($extensionNumber - 1) * 1000) + $offset);
                }
                $name = $enumNode->getAttribute("name");
                if($enumNode->hasAttribute("deprecated") || $enumNode->hasAttribute("alias")) return;
                if($enumNode->getAttribute("dir") === "-") {
                    $value = "-$value";
                }
                if($value === "") {
                    // These are usually consts on enums - ignore for now
                    return;
                }
                $enums[$enumName ?? ""][$name] = $value;
            };
            foreach($childNode->childNodes as $enumNode) {
                if(!$enumNode instanceof DOMElement || $enumNode->nodeName !== "enum") continue;
                $processEnumNode($enumNode);
            }
            // Find enum extensions from features
            foreach ($root->childNodes as $featureNode) {
                if(!$featureNode instanceof DOMElement || $featureNode->nodeName !== "feature") continue;
                foreach($featureNode->childNodes as $requireNode) {
                    if(!$requireNode instanceof DOMElement || $requireNode->nodeName !== "require") continue;
                    foreach($requireNode->childNodes as $enumNode) {
                        if(!$enumNode instanceof DOMElement || $enumNode->nodeName !== "enum" || $enumNode->getAttribute("extends") !== $enumName) continue;
                        $processEnumNode($enumNode);
                    }
                }
            }
            // Find enum extensions from... extensions
            foreach ($root->childNodes as $extensionsNode) {
                if(!$extensionsNode instanceof DOMElement || $extensionsNode->nodeName !== "extensions") continue;
                foreach($extensionsNode->childNodes as $extensionNode) {
                    if (!$extensionNode instanceof DOMElement || $extensionNode->nodeName !== "extension") continue;
                    foreach($extensionNode->childNodes as $requireNode) {
                        if (!$requireNode instanceof DOMElement || $requireNode->nodeName !== "require") continue;
                        foreach ($requireNode->childNodes as $enumNode) {
                            if (!$enumNode instanceof DOMElement || $enumNode->nodeName !== "enum" || $enumNode->getAttribute("extends") !== $enumName) continue;
                            $processEnumNode($enumNode, intval($extensionNode->getAttribute("number")));
                        }
                    }
                }
            }
        }
        $this->defines = $enums[""] ?? [];
        $this->types = iterator_to_array(Type::getAll($root, $enums, $enums64Bit, $enumsBitmask));
        $this->commands = iterator_to_array(Command::getAll($root));

    }

    public static function get(
        string $version = "1.3.280",
        VulkanVariant $variant = VulkanVariant::Vulkan,
        ?string $cacheDirectory = null
    ): self
    {

        $dom = new DOMDocument();
        if(is_null($cacheDirectory)) {
            $dom->loadXML(file_get_contents("https://github.com/KhronosGroup/Vulkan-Docs/raw/v$version/xml/vk.xml"));
        } else {
            $file = "$cacheDirectory/vk_$version.xml";
            if(!file_exists($file)) {
                $conts = file_get_contents("https://github.com/KhronosGroup/Vulkan-Docs/raw/v$version/xml/vk.xml");
                if(!is_dir(dirname($file))) {
                    mkdir(dirname($file));
                }
                file_put_contents($file, $conts);
            }
            $dom->load($file);
        }
        /** @var DOMElement[] $nodesToRemove */
        $nodesToRemove = iterator_to_array(self::filter($dom, $variant), false);
        // iterate from last to first
        foreach($nodesToRemove as $nodeToRemove) {
            $nodeToRemove->parentNode?->removeChild($nodeToRemove);
        }
        return new self($dom->firstElementChild);
    }
    /**
     * @template T
     * @param class-string<T> $class
     * @return list<T>
     */
    public function getTypes(string $class): array
    {
        return array_values(array_filter($this->types, fn($x) => $x instanceof $class));
    }

    public function getType(string $name): ?Type
    {
        foreach($this->types as $type) {
            if($type->name === $name) return $type;
        }
        return null;
    }

    /**
     * @return Generator<DOMNode>
     */
    private static function filter(DOMNode $node, VulkanVariant $variant): Generator
    {
        if($node instanceof DOMElement && $node->nodeName === "comment") {
            yield $node;
            return;
        }
        if($node instanceof DOMElement && $node->hasAttribute("api")) {
            $apis = explode(",", $node->getAttribute("api"));
            if(in_array($variant->value, $apis)) {
                // Remove the "api" attribute for cleaner debugging
                $node->removeAttribute("api");
            } else {
                // Remove the element
                yield $node;
            }
        }
        foreach ($node->childNodes as $childNode) {
            yield from self::filter($childNode, $variant);
        }
    }

    /**
     * @internal
     * @return array{0:string,1:string}
     */
    public static function getTypeAndNameFromCElement(DOMElement $element): array
    {
        $name = trim(array_values(array_filter(iterator_to_array($element->childNodes), fn($e) => $e instanceof DOMElement && $e->tagName === "name"))[0]->textContent);

        // Copy element to new document to mutate it
        $tempDom = new \DOMDocument();
        $tempDom->loadXML($element->ownerDocument->saveXML($element));
        $tempElement = $tempDom->firstElementChild;
        // Remove the name
        $nodesToRemove = [];
        foreach($tempElement->childNodes as $childNode) {
            if($childNode instanceof DOMElement && ($childNode->nodeName === "name" || $childNode->nodeName === "comment")) {
                $nodesToRemove[] = $childNode;
            }
        }
        foreach ($nodesToRemove as $node) $node->remove();
        $type = trim($tempElement->textContent);
        return [$name, $type];
    }
}