<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

class BienDTO
{
    private ?string $libelle = null;
    private ?int $nbPieces = null;
    private bool $isMeuble = false;
    private ?string $etage = null;
    private ?string $numPorte = null;
    private ?float $surface = null;
    private ?AdresseDTO $adresse = null;
    public function __construct(private readonly string $reference, private readonly string $type)
    {
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): BienDTO
    {
        $this->libelle = $libelle;
        return $this;
    }

    public function getNbPieces(): ?int
    {
        return $this->nbPieces;
    }

    public function setNbPieces(?int $nbPieces): BienDTO
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    public function getIsMeuble(): bool
    {
        return $this->isMeuble;
    }

    public function setIsMeuble(bool $isMeuble): BienDTO
    {
        $this->isMeuble = $isMeuble;

        return $this;
    }

    public function getEtage(): ?string
    {
        return $this->etage;
    }

    public function setEtage(?string $etage): BienDTO
    {
        $this->etage = $etage;

        return $this;
    }

    public function getNumPorte(): ?string
    {
        return $this->numPorte;
    }

    public function setNumPorte(?string $numPorte): BienDTO
    {
        $this->numPorte = $numPorte;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(?float $surface): BienDTO
    {
        $this->surface = $surface;

        return $this;
    }

    public function getAdresse(): ?AdresseDTO
    {
        return $this->adresse;
    }

    public function setAdresse(?AdresseDTO $adresse): BienDTO
    {
        $this->adresse = $adresse;

        return $this;
    }
}
