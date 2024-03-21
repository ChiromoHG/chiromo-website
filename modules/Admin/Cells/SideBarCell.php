<?php

namespace Modules\Admin\Cells;

use CodeIgniter\View\Cells\Cell;

use Modules\Admin\Models\AdminModel;

class SideBarCell extends Cell
{

    private $adminModel;
    public function __construct(){
        $this->adminModel = model(AdminModel::class);
    }
    public function display(): string
    {
        $data['sidebar'] = $this->adminModel->getAllSidebarComponent(session()->get('role_name'));
        return view('Modules\Admin\Views\components\sidebar', $data);
    }
}