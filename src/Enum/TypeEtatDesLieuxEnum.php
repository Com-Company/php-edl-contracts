<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypeEtatDesLieuxEnum: string
{
    case ENTREE = 'ENTREE';
    case SORTIE = 'SORTIE';
    case ENTREE_SORTIE = 'ENTREE_SORTIE';
}
