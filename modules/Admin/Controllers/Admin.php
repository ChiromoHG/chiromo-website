<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('Modules\Admin\Views\main\dashboard');
    }

    public function login()
    {
        return view('Modules\Admin\Views\main\login');
    }
}