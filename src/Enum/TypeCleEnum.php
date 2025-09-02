<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypeCleEnum: string
{
    case CODE = 'CODE';
    case BOITE_AUX_LETTRES = 'BOITE_AUX_LETTRES';
    case PORTE_ENTREE = 'PORTE_ENTREE';
    case VERROU_HAUT = 'VERROU_HAUT';
    case VERROU_BAS = 'VERROU_BAS';
    case ALARME = 'ALARME';
    case CHAMBRE = 'CHAMBRE';
    case EMETTEUR_BIP = 'EMETTEUR_BIP';
    case BADGE_MAGNETIQUE = 'BADGE_MAGNETIQUE';
    case PORTE_IMMEUBLE = 'PORTE_IMMEUBLE';
    case COMMUNS = 'COMMUNS';
    case CAVE = 'CAVE';
    case ACCES_GARAGE_PARKING = 'ACCES_GARAGE_PARKING';
    case GARAGE_PARKING = 'GARAGE_PARKING';
    case LOCAL_POUBELLE = 'LOCAL_POUBELLE';
    case LOCAL_VELO = 'LOCAL_VELO';
    case ASCENSEUR = 'ASCENSEUR';
    case PORTAIL = 'PORTAIL';
    case PORTILLON = 'PORTILLON';
    case NON_IDENTIFIE = 'NON_IDENTIFIE';
    case AUTRE_CLE = 'AUTRE_CLE';

}
