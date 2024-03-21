<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;

use Modules\Admin\Models\DepartmentModel;
use Ramsey\Uuid\Uuid;

class Departments extends BaseController{

    private $departmentModel;
    public function __construct()
    {
        $this->departmentModel = model(DepartmentModel::class);
    }

    public function getAllDepartments()
    {
        try{

            $departments = $this->departmentModel->getAllDepartments();

            $response = [
                'status' => 200,
                'message' => 'Departments fetched successfully',
                'data' => $departments
            ];

            return $this->response->setJSON($response);

        }catch (\Exception $e){

            return $this->response->setJSON([
                'status' => 500,
                'message' => 'Something went wrong'
            ]);
        }
    }

    public function createDepartment()
    {
        $departmentName = $this->request->getPost('departmentName');
        $departmentDescription = $this->request->getPost('departmentDescription');
        $departmentId = $this->request->getPost('departmentId');

        $department = [
            'department_uuid' => Uuid::uuid4()->toString(),
            'department_name' => $departmentName,
            'department_description' => $departmentDescription,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $departmentEdit = [
            'department_name' => $departmentName,
            'department_description' => $departmentDescription,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if(!empty($departmentId)){
            try{


                $this->departmentModel->updateDepartment($departmentId, $departmentEdit);

                $response = [

                    'status' => 200,
                    'message' => 'Department updated successfully'
                ];
            }catch(\Exception $e){

                return $this->response->setJSON([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ]);
            }
        }else{
            try{

                $checkDepartment = $this->departmentModel->getDepartmentByName($departmentName);
                if(count($checkDepartment) > 0){
                    return $this->response->setJSON([
                        'status' => 500,
                        'message' => 'Department already exists'
                    ]);
                }

                $this->departmentModel->createDepartment($department);

                $response = [

                    'status' => 200,
                    'message' => 'Department created successfully'
                ];
            }catch(\Exception $e){

                return $this->response->setJSON([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ]);
            }
        }

        return $this->response->setJSON($response);

    }

    public function getDepartmentById(){

        $departmentId = $this->request->getVar('departmentId');

        try {
            $department = $this->departmentModel->getDepartmentById($departmentId);
            if ($department) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Answers Fetched Successfully',
                    'data' => $department
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);
        } catch (\Exception $e) {
            return $this->response->setJSON(
                [
                    'status' => 500,
                    'message' => 'Something went wrong'
                ]
            );
        }
    }
}