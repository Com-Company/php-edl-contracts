<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO\Request;

use ComCompany\PhpEdlContracts\Enum\TypeEtatDesLieuxEnum;
use DateTimeImmutable;

class SynchroniserEtatDesLieuxRequestDTO
{
    /**
     * @param string[] $referencesBaux
     */
    public function __construct(
        public readonly string $reference,
        public readonly string $type,
        public readonly array $referencesBaux,
        public readonly string $referenceRapport,
        public readonly string $dateCreationRapport,
        public readonly string $nomRapport,
    ) {
    }
}
