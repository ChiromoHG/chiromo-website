<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Assessment extends BaseController
{
    public function assessment()
    {
        return view('main/assessment');
    }
}
