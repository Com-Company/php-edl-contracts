<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypeCompteurEnum
{
    case ELECTRICITE;
    case EAU_FROIDE;
    case EAU_CHAUDE;
    case GAZ;
    case CHAUFFAGE;
    case AUTRE;

}
