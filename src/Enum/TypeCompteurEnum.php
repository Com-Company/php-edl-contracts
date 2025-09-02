<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypeCompteurEnum: string
{
    case ELECTRICITE = 'ELECTRICITE';
    case EAU_FROIDE = 'EAU_FROIDE';
    case EAU_CHAUDE = 'EAU_CHAUDE';
    case GAZ = 'GAZ';
    case CHAUFFAGE = 'CHAUFFAGE';
    case AUTRE = 'AUTRE';

}
