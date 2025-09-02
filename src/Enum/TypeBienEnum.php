<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypeBienEnum: string
{
    case APPARTEMENT = 'APPARTEMENT';
    case MAISON = 'MAISON';
    case GARAGE = 'GARAGE';
    case LOCAL = 'LOCAL';
    case AUTRE = 'AUTRE';
}
