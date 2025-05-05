<?php

namespace App\Domain\Ports\Out;

use App\Domain\Models\Asset;

interface AssetRepositoryPort
{
    public function save(Asset $asset): void;

    /** @return Asset[] */
    public function findAll(): array;
}
