<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegulationClass;
use AppCore\App\Service\Regulation\RegulationClassService;
use Illuminate\Http\Request;

class RegulationClassController extends Controller
{
    /**
     * @var RegulationClassService
     */
    private $appService;

    /**
     * RegulationClassController constructor.
     * @param RegulationClassService $appService
     */
    public function __construct(RegulationClassService $appService)
    {
        $this->appService = $appService;
    }

    public function index()
    {
//        $obj = new \AppCore\Domain\Entity\Regulation\RegulationClass();
//        $obj->setName('a');
//        $obj->setCompanyId(1);
//        $obj->setRegulationTypeId(2);
//        $obj->setId(2);
//        return response()->json($obj);
        dd($this->appService->index());
//        return new RegulationClass($this->appService->index());
//        $h = (array) new \ReflectionObject($this->appService->index()[0]);
//        dd($h);
//        dd((array) $this->appService->index()[0]);
//        $var = $this->appService->index();
//        $test = [];
//        foreach ($var as $key)
//        {
//            array_push($test, (object)(array) $key );
//        }
//        return $test;
        //return json_encode($this->appService->index());
        //var_dump((array) $this->appService->index()[0]);
//        return json_encode($this->appService->index()[0], true);
//        $data = (array) $this->appService->index()[0];
//        return response($data);//->json($this->appService->index(), 200);
//        return $this->appService->index();
    }
    public function store(Request $request)
    {
        return response()->json($this->appService->store($request->all()));
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->appService->update($request->all(), $id));
    }

    public function destroy($id)
    {
        return response()->json(dd($this->appService->delete($id)));
    }

}
