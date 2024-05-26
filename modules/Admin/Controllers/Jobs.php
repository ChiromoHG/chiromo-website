<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

use Modules\Admin\Models\JobsModel;
use Ramsey\Uuid\Uuid;

class Jobs extends BaseController{

    private $jobModel;

    public function __construct()
    {
        $this->jobModel = model(JobsModel::class);
    }

    public function createJob(){
        return view('Modules\Admin\Views\main\create-job');
    }

    public function getJobs(){
        try {
            $data = $this->jobModel->getJobs();
            return $this->response->setJSON(['status' => 200, 'data' => $data]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Internal server error occurred']);
        }
    }

    public function saveJob()
        {
            if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                return $this->response->setJSON([
                    'status' => 400,
                    'message' => 'Bad request'
                ]);
            }

            $image = $this->request->getFile('image');
            if (!$image->isValid() || $image->hasMoved()) {
                return $this->response->setJSON([
                    'status' => 400,
                    'message' => 'Invalid or moved image file'
                ]);
            }

            $uploadPath = FCPATH . 'uploads/jobs';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $imageName = $image->getRandomName();
            $image->move($uploadPath, $imageName);

            $data = $this->prepareJobData($imageName);

            try {
                $this->jobModel->saveJob($data);
                return $this->response->setJSON([
                    'status' => 200,
                    'message' => 'Job created successfully'
                ]);
            } catch (\Exception $e) {
                return $this->response->setJSON([
                    'status' => 500,
                    'message' => 'Internal server error occurred'
                ]);
            }
    }

    private function prepareJobData($imageName)
    {
        return [
            'job_uuid' => Uuid::uuid4()->toString(),
            'job_title' => $this->request->getPost('title'),
            'job_type' => $this->request->getPost('type'),
            'job_category' => $this->request->getPost('category'),
            'job_location' => $this->request->getPost('location'),
            'job_description' => $this->request->getPost('description'),
            'job_closing_date' => $this->request->getPost('date'),
            'application_link' => $this->request->getPost('link'),
            'job_disclaimer' => $this->request->getPost('disclaimer'),
            'job_image' => $imageName,
            'created_at' => date('Y-m-d H:i:s')
        ];
    }

}