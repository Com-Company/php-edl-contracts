<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

use ComCompany\PhpEdlContracts\Enum\TypeCompteurEnum;

class CompteurDTO
{
    private ?string $numCompteur = null;

    public function __construct(private readonly TypeCompteurEnum $type)
    {
    }

    public function getType(): TypeCompteurEnum
    {
        return $this->type;
    }

    public function getNumCompteur(): ?string
    {
        return $this->numCompteur;
    }

    public function setNumCompteur(?string $numCompteur): CompteurDTO
    {
        $this->numCompteur = $numCompteur;

        return $this;
    }
}
