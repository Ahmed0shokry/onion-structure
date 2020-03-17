<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegulationTypeStoreRequest;
use AppCore\Domain\Services\Regulation\RegulationTypeService;
use Illuminate\Http\Request;

class RegulationTypeController extends Controller
{
    /**
     * @var RegulationTypeService
     */
    protected $regulationTypeService;

    /**
     * RegulationTypeController constructor.
     * @param RegulationTypeService $regulationTypeService
     */
    public function __construct(RegulationTypeService $regulationTypeService)
    {
        $this->regulationTypeService = $regulationTypeService;
    }

    public function index()
    {
        return $this->regulationTypeService->regulationTypeRepository->getAll();
    }

    public function store(RegulationTypeStoreRequest $req)
    {
        //dd($req->all());
        return $this->regulationTypeService->regulationTypeRepository->getAll();
    }

}
