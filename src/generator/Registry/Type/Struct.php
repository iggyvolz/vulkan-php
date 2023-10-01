<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;

final readonly class Struct extends Type
{
    public bool $returnedonly;
    public array $structextends;
    public bool $allowduplicate;
    /**
     * @var list<StructMember>
     */
    public array $members;
    public function setUp(DOMElement $element):void
    {
        $this->returnedonly = $element->hasAttribute("returnedonly");
        $this->structextends = array_filter(explode(",", $element->getAttribute("structextends")));
        $this->allowduplicate = $element->hasAttribute("allowduplicate");
        $this->members = iterator_to_array(StructMember::getAll($element));
    }
}