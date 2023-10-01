<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDeviceFaultAddressTypeEXT: int
{
    case None = 0;
    case ReadInvalid = 1;
    case WriteInvalid = 2;
    case ExecuteInvalid = 3;
    case InstructionPointerUnknown = 4;
    case InstructionPointerInvalid = 5;
    case InstructionPointerFault = 6;
}
