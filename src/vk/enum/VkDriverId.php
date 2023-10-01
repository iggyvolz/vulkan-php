<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDriverId: int
{
    case AmdProprietary = 1;
    case AmdOpenSource = 2;
    case MesaRadv = 3;
    case NvidiaProprietary = 4;
    case IntelProprietaryWindows = 5;
    case IntelOpenSourceMesa = 6;
    case ImaginationProprietary = 7;
    case QualcommProprietary = 8;
    case ArmProprietary = 9;
    case GoogleSwiftshader = 10;
    case GgpProprietary = 11;
    case BroadcomProprietary = 12;
    case MesaLlvmpipe = 13;
    case Moltenvk = 14;
    case CoreaviProprietary = 15;
    case JuiceProprietary = 16;
    case VerisiliconProprietary = 17;
    case MesaTurnip = 18;
    case MesaV3dv = 19;
    case MesaPanvk = 20;
    case SamsungProprietary = 21;
    case MesaVenus = 22;
    case MesaDozen = 23;
    case MesaNvk = 24;
    case ImaginationOpenSourceMesa = 25;
    case MesaAgxv = 26;
}
