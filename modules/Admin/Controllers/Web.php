<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

use Modules\Admin\Models\WebModel;
use Ramsey\Uuid\Uuid;

class Web extends BaseController
{

    private $webModel;

    public function __construct()
    {
        $this->webModel = model(WebModel::class);
    }

    public function createCarousel()
    {
        return view('Modules\Admin\Views\main\create-carousel');
    }

    public function saveCarousel()
    {

        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $tag = $this->request->getPost('tag');
        $image = $this->request->getFile('image');
        $button = $this->request->getPost('hasButton');
        if($image->isValid() && !$image->hasMoved())
        {
            $uploadPath =  FCPATH .'uploads/carousel';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $imageName = $image->getRandomName();
            $image->move($uploadPath, $imageName);
            $data = [
                'carousel_uuid' => Uuid::uuid4(),
                'carousel_title' => $title,
                'carousel_description' => $description,
                'carousel_tag' => $tag,
                'carousel_image' => $imageName,
                'carousel_has_button' => $button,
            ];

            try {
                $this->webModel->saveCarousel($data);
                return $this->response->setJSON(['status' => 200, 'message' => 'Carousel created successfully']);
            } catch (\Exception $e) {
                return $this->response->setJSON(['status' => 500, 'message' => 'Internal server error occurred']);
            }
        }else{
            return $this->response->setJSON(['status' => 500, 'message' => 'Image is not valid']);
        }
    }

    public function getCarousel()
    {
        try {
            $data = $this->webModel->getCarousel();
            return $this->response->setJSON(['status' => 200, 'data' => $data]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Internal server error occurred']);
        }
    }

    public function createJob(){
        return view('Modules\Admin\Views\main\create-job');
    }

    public function getJobs(){
        try {
            $data = $this->webModel->getJobs();
            return $this->response->setJSON(['status' => 200, 'data' => $data]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Internal server error occurred']);
        }
    }


    public function saveJob()
    {
        $job_title = $this->request->getPost('title');
        $job_type = $this->request->getPost('type');
        $job_category = $this->request->getPost('category');
        $location = $this->request->getPost('location');
        $description = $this->request->getPost('description');
        $closing_date = $this->request->getPost('date');
        $link = $this->request->getPost('link');
        $disclaimer = $this->request->getPost('disclaimer');
        $image = $this->request->getFile('image');

        if($image->isValid() && !$image->hasMoved()) {
            $uploadPath = FCPATH . 'uploads/jobs';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $imageName = $image->getRandomName();
            $image->move($uploadPath, $imageName);
            $data = [
                'job_uuid' => Uuid::uuid4(),
                'job_title' => $job_title,
                'job_type' => $job_type,
                'job_category' => $job_category,
                'job_location' => $location,
                'job_description' => $description,
                'job_closing_date' => $closing_date,
                'application_link' => $link,
                'job_disclaimer' => $disclaimer,
                'job_image' => $imageName,
                'created_at' => date('Y-m-d H:i:s')
            ];

            try {
                $this->webModel->saveJob($data);
                $response = [
                    'status' => 200,
                    'message' => 'Job created successfully'
                ];
            } catch (\Exception $e) {
                $response = [
                    'status' => 500,
                    'message' => 'Internal server error occurred'
                ];
            }

            return $this->response->setJSON($response);
        }
    }
}