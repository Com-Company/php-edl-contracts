<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypePieceEnum: string
{
    case ENTREE = 'ENTREE';
    case SEJOUR = 'SEJOUR';
    case CUISINE = 'CUISINE';
    case SEJOUR_ET_CUISINE = 'SEJOUR_ET_CUISINE';
    case SALLE = 'SALLE';
    case CHAMBRE = 'CHAMBRE';
    case SALLE_D_EAU = 'SALLE_D_EAU';
    case TOILETTES = 'TOILETTES';
    case SALLE_DE_BAIN = 'SALLE_DE_BAIN';
    case BUREAU = 'BUREAU';
    case DEGAGEMENT = 'DEGAGEMENT';
    case ESCALIER = 'ESCALIER';
    case GARAGE_BOX = 'GARAGE_BOX';
    case PARKING = 'PARKING';
    case CAVE = 'CAVE';
    case CELLIER = 'CELLIER';
    case BUANDERIE = 'BUANDERIE';
    case TERRASSE_BALCON = 'TERRASSE_BALCON';
    case EXTERIEUR_JARDIN = 'EXTERIEUR_JARDIN';
    case AUTRE_PIECE = 'AUTRE_PIECE';

}
