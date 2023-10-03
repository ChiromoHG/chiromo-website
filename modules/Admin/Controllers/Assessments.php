<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;


use App\Libraries\Hash;
use Modules\Admin\Models\AdminModel;
use Ramsey\Uuid\Uuid;



class Assessments extends BaseController{
    public function assessment(){
        return view('Modules\Admin\Views\main\assessment');
    }
}