<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Appointment extends BaseController
{
    public function appointment()
    {
        return view('main/appointment');
    }

    public function onlineTherapy(){
        return view('main/online-therapy');
    }
}
