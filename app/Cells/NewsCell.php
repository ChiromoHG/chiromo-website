<?php


namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\ApiModel;

class NewsCell extends Cell
{

    private $apiModel;
    public function __construct(){
        $this->apiModel = model(ApiModel::class);
    }
    public function display(): string
    {
        return view('App\Views\components\news-section');
    }
}