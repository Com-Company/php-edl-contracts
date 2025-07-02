<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\Enum;

enum TypeCleEnum
{
    case CODE;
    case BOITE_AUX_LETTRES;
    case PORTE_ENTREE;
    case VERROU_HAUT;
    case VERROU_BAS;
    case ALARME;
    case CHAMBRE;
    case EMETTEUR_BIP;
    case BADGE_MAGNETIQUE;
    case PORTE_IMMEUBLE;
    case COMMUNS;
    case CAVE;
    case ACCES_GARAGE_PARKING;
    case GARAGE_PARKING;
    case LOCAL_POUBELLE;
    case LOCAL_VELO;
    case ASCENSEUR;
    case PORTAIL;
    case PORTILLON;
    case NON_IDENTIFIE;
    case AUTRE_CLE;

}
