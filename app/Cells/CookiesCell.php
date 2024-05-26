<?php


namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class CookiesCell extends Cell
{

    public function __construct(){

    }
    public function display(): string
    {
        return view('App\Views\components\cookies');
    }
}