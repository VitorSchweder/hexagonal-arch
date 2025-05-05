<?php

namespace App\Http\Controllers;

use App\Application\UseCases\AddAssetToPortfolioUseCase;
use App\Application\UseCases\ListPortfolioAssetsUseCase;
use App\Domain\Models\Asset;
use Illuminate\Http\Request;
use App\Infrastructure\Persistence\AssetRepository;

class PortfolioController extends Controller
{
    private AddAssetToPortfolioUseCase $addUseCase;
    private ListPortfolioAssetsUseCase $listUseCase;

    public function __construct()
    {
        $repository = new AssetRepository();
        $this->addUseCase = new AddAssetToPortfolioUseCase($repository);
        $this->listUseCase = new ListPortfolioAssetsUseCase($repository);
    }

    public function add(Request $request)
    {
        $asset = new Asset(
            $request->input('ticker'),
            $request->input('average_price'),
            $request->input('quantity')
        );

        $this->addUseCase->add($asset);

        return response()->json(['message' => 'Ativo adicionado com sucesso']);
    }

    public function list()
    {
        $assets = $this->listUseCase->list();

        return response()->json($assets);
    }
}
