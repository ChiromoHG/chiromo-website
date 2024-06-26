<?php


namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\ApiModel;

class BookSectionCell extends Cell
{

    private $apiModel;
    public function __construct(){
        $this->apiModel = model(ApiModel::class);
    }
    public function display(): string
    {
        return view('App\Views\components\book-section');
    }
}