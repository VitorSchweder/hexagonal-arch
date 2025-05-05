<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Models\Asset;
use App\Domain\Ports\Out\AssetRepositoryPort;
use App\Models\Asset as EloquentAsset;

class AssetRepository implements AssetRepositoryPort
{
    public function save(Asset $asset): void
    {
        EloquentAsset::create([
            'ticker' => $asset->ticker,
            'average_price' => $asset->averagePrice,
            'quantity' => $asset->quantity,
        ]);
    }

    public function findAll(): array
    {
        return EloquentAsset::all()
            ->map(fn($model) => new Asset(
                $model->ticker,
                $model->average_price,
                $model->quantity
            ))
            ->toArray();
    }
}
