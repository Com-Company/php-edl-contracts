<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

class AdresseDTO
{
    private ?string $rue = null;
    private ?string $rueComplement = null;
    private ?string $codePostal = null;
    private ?string $ville = null;

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): AdresseDTO
    {
        $this->rue = $rue;

        return $this;
    }

    public function getRueComplement(): ?string
    {
        return $this->rueComplement;
    }

    public function setRueComplement(?string $rueComplement): AdresseDTO
    {
        $this->rueComplement = $rueComplement;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): AdresseDTO
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): AdresseDTO
    {
        $this->ville = $ville;

        return $this;
    }

}
