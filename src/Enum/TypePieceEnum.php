<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypePieceEnum
{
    case ENTREE;
    case SEJOUR;
    case CUISINE;
    case SEJOUR_ET_CUISINE;
    case SALLE;
    case CHAMBRE;
    case SALLE_D_EAU;
    case TOILETTES;
    case SALLE_DE_BAIN;
    case BUREAU;
    case DEGAGEMENT;
    case ESCALIER;
    case GARAGE_BOX;
    case PARKING;
    case CAVE;
    case CELLIER;
    case BUANDERIE;
    case TERRASSE_BALCON;
    case EXTERIEUR_JARDIN;
    case AUTRE_PIECE;

}
