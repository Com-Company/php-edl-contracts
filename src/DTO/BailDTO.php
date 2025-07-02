<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

class BailDTO
{
    private ?string $libelle = null;
    private ?\DateTimeImmutable $dateSortie = null;

    /** @var array<LocataireDTO>|null */
    private ?array $locataires = null;

    public function __construct(private readonly string $reference, private readonly \DateTimeImmutable $dateDebut)
    {
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getDateDebut(): \DateTimeImmutable
    {
        return $this->dateDebut;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): BailDTO
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeImmutable
    {
        return $this->dateSortie;
    }

    public function setDateSortie(?\DateTimeImmutable $dateSortie): BailDTO
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getLocataires(): ?array
    {
        return $this->locataires;
    }

    public function setLocataires(?array $locataires): BailDTO
    {
        $this->locataires = $locataires;

        return $this;
    }

    public function addLocataire(LocataireDTO $locataire): BailDTO
    {
        $this->locataires[] = $locataire;

        return $this;
    }

}
