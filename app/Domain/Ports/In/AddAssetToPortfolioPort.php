<?php

namespace App\Domain\Ports\In;

use App\Domain\Models\Asset;

interface AddAssetToPortfolioPort
{
    public function add(Asset $asset): void;
}
