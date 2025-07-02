<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

class UserDTO
{
    public function __construct(private readonly string $nom, private readonly string $prenom, private readonly string $email)
    {
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}
