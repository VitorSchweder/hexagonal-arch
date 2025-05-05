<?php

namespace App\Application\UseCases;

use App\Domain\Models\Asset;
use App\Domain\Ports\In\AddAssetToPortfolioPort;
use App\Domain\Ports\Out\AssetRepositoryPort;

class AddAssetToPortfolioUseCase implements AddAssetToPortfolioPort
{
    public function __construct(private AssetRepositoryPort $repository) {}

    public function add(Asset $asset): void
    {
        $this->repository->save($asset);
    }
}
