<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

class EnsembleDTO
{
    private ?string $ville = null;

    public function __construct(private readonly string $reference, private readonly string $libelle)
    {
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): EnsembleDTO
    {
        $this->ville = $ville;

        return $this;
    }

}
