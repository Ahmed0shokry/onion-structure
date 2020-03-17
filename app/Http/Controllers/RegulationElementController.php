<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AppCore\App\RegulationControllers\RegulationElementController as AppController;

class RegulationElementController extends Controller
{
    /**
     * @var AppController
     */
    private $controller;

    /**
     * RegulationElementController constructor.
     * @param AppController $controller
     */
    public function __construct(AppController $controller)
    {
        $this->controller = $controller;
    }

    public function index(){
        // request extract
        //  $paginaintion = ['page', 'perPage', 'lang'] $request
        //
        // validate
        //   page int, validation(rules)
        //   return friendly user error (400 code)
        // apply business logic
        //  $user = Auth::user()
        //   $data  $this->appServ->getAciveRegoluationItem($user;
        // response
        return $this->response(new SuccessResponse($data));

        //  200 ok
        // {
           //   status: '',
           //   meta: {
           //   }
           //   data: {
           //  }
        //  }
        // api/v1.1/regulations/404
        //    404 not found
        //    -h 'v1.1'
        /**
         *    400 error
         *     {
         *         'status':  ''
         *          'error' : ['', '' ,'','']
         *          'erros': {  'name' : { 'length': '',  unique: '' }    }
         *      }
         *
         *
         */
    }
}
