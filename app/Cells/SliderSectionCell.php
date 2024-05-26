<?php


namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\ApiModel;

class SliderSectionCell extends Cell
{

    private $apiModel;
    public function __construct(){
        $this->apiModel = model(ApiModel::class);
    }
    public function display(): string
    {
        $data =[];
        try{
            $data['carousel'] = $this->apiModel->getCarousel();
        }catch(Exception $e){
            log_message('error', $e->getMessage());
        }
        return view('App\Views\components\slider-section', $data);
    }
}