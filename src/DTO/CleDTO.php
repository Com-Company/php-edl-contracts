<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

use ComCompany\PhpEdlContracts\Enum\TypeCleEnum;

class CleDTO
{
    private ?int $nombre = null;

    public function __construct(private readonly TypeCleEnum $type, private readonly ?string $libelle)
    {
    }

    public function getType(): TypeCleEnum
    {
        return $this->type;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): CleDTO
    {
        $this->nombre = $nombre;

        return $this;
    }

}
