<?php

namespace App\Application\UseCases;

use App\Domain\Models\Asset;
use App\Domain\Ports\In\ListPortfolioAssetsPort;
use App\Domain\Ports\Out\AssetRepositoryPort;

class ListPortfolioAssetsUseCase implements ListPortfolioAssetsPort
{
    public function __construct(private AssetRepositoryPort $repository) {}

    public function list(): array
    {
        return $this->repository->findAll();
    }
}
