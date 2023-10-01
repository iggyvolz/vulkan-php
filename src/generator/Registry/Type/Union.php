<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;

final readonly class Union extends Type
{
    public bool $returnedonly;
    /**
     * @var list<string>
     */
    public array $structextends;
    /**
     * @var list<UnionMember>
     */
    public array $members;
    public function setUp(DOMElement $element):void
    {
        $this->returnedonly = $element->hasAttribute("returnedonly");
        $this->structextends = explode(",", $element->getAttribute("structextends"));
        $this->members = iterator_to_array(UnionMember::getAll($element));
    }
}