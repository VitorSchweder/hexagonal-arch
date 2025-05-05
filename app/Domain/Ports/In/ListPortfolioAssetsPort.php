<?php

namespace App\Domain\Ports\In;

use App\Domain\Models\Asset;

interface ListPortfolioAssetsPort
{
    /** @return Asset[] */
    public function list(): array;
}
