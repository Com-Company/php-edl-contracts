<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

class LocataireDTO
{
    private ?string $civilite = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $raisonSociale = null;
    private ?string $telephone = null;
    private ?AdresseDTO $adresse = null;

    public function __construct(private readonly string $reference)
    {
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(?string $civilite): LocataireDTO
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): LocataireDTO
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): LocataireDTO
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(?string $raisonSociale): LocataireDTO
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): LocataireDTO
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?AdresseDTO
    {
        return $this->adresse;
    }

    public function setAdresse(?AdresseDTO $adresse): LocataireDTO
    {
        $this->adresse = $adresse;

        return $this;
    }
}
