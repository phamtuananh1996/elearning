<?php
namespace GFL\Elearning\controllers\emodules;
 
use GFL\Elearning\controllers\ApiController;
use Carbon\Carbon;
use GFL\Elearning\models\EModule;
 
class EmoduleController extends ApiController
{
    public function index()
    {
        $emodules=EModule::all();
        return $this->response($emodules);
    }

    public function store()
    {
        
    }

    public function show()
    {
        
    }

    public function Update()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }

}