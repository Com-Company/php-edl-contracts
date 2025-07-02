<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO;

use ComCompany\PhpEdlContracts\Enum\TypePieceEnum;

class CompositionDTO
{
    private ?int $nombre = null;

    public function __construct(private readonly TypePieceEnum $typePiece, private readonly ?string $libelle)
    {
    }

    public function getTypePiece(): TypePieceEnum
    {
        return $this->typePiece;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): CompositionDTO
    {
        $this->nombre = $nombre;

        return $this;
    }

}
