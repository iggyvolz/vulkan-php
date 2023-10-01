<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

enum TypeDeprecation: string
{
    case True = "true";
    case Aliased = "aliased";
    case Ignored = "ignored";
}