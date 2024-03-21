<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;

use Modules\Admin\Models\ServicesModel;
use Ramsey\Uuid\Uuid;

class Services extends BaseController{

    private $servicesModel;
    public function __construct()
    {
        $this->servicesModel = model(ServicesModel::class);
    }

    public function services(): string
    {
        $data = [];
        try{
            $getDepartments = $this->servicesModel->getAllDepartments();
            $data['departments'] = $getDepartments;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('Modules\Admin\Views\main\services', $data);
    }

    public function createService()
    {
        $departmentId = $this->request->getPost('department');
        $serviceName = $this->request->getPost('serviceName');
        $serviceDescription = $this->request->getPost('serviceDescription');
        $servicePrice = $this->request->getPost('servicePrice');
        $serviceId = $this->request->getPost('serviceId');

        $serviceData = [
            'service_uuid' => Uuid::uuid4()->toString(),
            'department_uuid' => $departmentId,
            'service_name' => $serviceName,
            'service_price' => $servicePrice,
            'service_description' => $serviceDescription,
        ];

        $serviceDataEdit = [
            'department_uuid' => $departmentId,
            'service_name' => $serviceName,
            'service_price' => $servicePrice,
            'service_description' => $serviceDescription,
        ];

        if(!empty($serviceId)){
            try{
                $this->servicesModel->updateService($serviceDataEdit, $serviceId);

                $response = [
                    'status' => 200,
                    'message' => 'Service Updated Successfully',
                ];
            }catch(\Exception $e){
                return $this->response->setJSON($e->getMessage());
            }
        }else{

            try{
                $this->servicesModel->createService($serviceData);

                $response = [
                    'status' => 200,
                    'message' => 'Service Created Successfully',
                ];
            }catch (\Exception $e){
                return $this->response->setJSON($e->getMessage());
            }
        }

        return $this->response->setJSON($response);
    }

    public function getAllServices()
    {
        try{
            $getServices = $this->servicesModel->getAllServices();
            $response = [
                'status' => 200,
                'message' => 'Services Fetched Successfully',
                'data' => $getServices,
            ];
        }catch (\Exception $e){
            return $this->response->setJSON([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        return $this->response->setJSON($response);
    }

    public function getServiceById()
    {
        $serviceId = $this->request->getGet('serviceId');
        try{
            $getService = $this->servicesModel->getServiceById($serviceId);
            $response = [
                'status' => 200,
                'message' => 'Service Fetched Successfully',
                'data' => $getService,
            ];
        }catch (\Exception $e){
            return $this->response->setJSON([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
        return $this->response->setJSON($response);
    }
}