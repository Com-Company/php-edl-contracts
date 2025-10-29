<?php

declare(strict_types=1);

namespace ComCompany\PhpEdlContracts\DTO\Request;

use ComCompany\PhpEdlContracts\Enum\TypeEtatDesLieuxEnum;
use DateTimeImmutable;

readonly class SynchroniserEtatDesLieuxRequestDTO
{
    /**
     * @param string[] $referencesBaux
     */
    public function __construct(
        public string $reference,
        public string $type,
        public array $referencesBaux,
        public string $referenceRapport,
        public string $dateCreationRapport,
        public string $nomRapport,
        public string $urlRapport,
    ) {
    }
}
