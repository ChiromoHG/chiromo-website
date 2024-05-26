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
                'carousel_uuid' => Uuid::uuid4()->toString(),
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

    public function createOffer()
    {
      return view('Modules\Admin\Views\main\create-offer');
    }

    public function saveOffer(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $title = $this->request->getPost('title');
            $offer = $this->request->getPost('offer');
            $startDate = $this->request->getPost('startDate');
            $endDate = $this->request->getPost('endDate');
            $offerId = $this->request->getPost('offerId');

            $newOffer = [
                'offer_uuid' => Uuid::uuid4()->toString(),
                'offer_title' => $title,
                'offer' => $offer,
                'offer_start_date' => $startDate,
                'offer_end_date' => $endDate,
            ];

            $editOffer = [
                'offer_title' => $title,
                'offer' => $offer,
                'offer_start_date' => $startDate,
                'offer_end_date' => $endDate,
            ];

            if(!empty($offerId)){

                try{

                    $checkedOffers = $this->webModel->checkOffer($offerId);

                    if(!$checkedOffers){
                        $response = [
                            'status' => 404,
                            'message' => 'Offer not found!'
                        ];
                    }

                    $this->webModel->editOffer($newOffer, $offerId);
                    $response = [
                        'status' => 200,
                        'message' => 'Success'
                    ];
                }catch(\Exception $e){
                    $response = [
                        'status' => 500,
                        'message' => 'Internal server error occurred'
                    ];
                }
            }else{

                try{
                    $this->webModel->saveOffer($newOffer);
                    $response = [
                        'status' => 200,
                        'message' => 'Success'
                    ];
                }catch(\Exception $e){
                    $response = [
                        'status' => 500,
                        'message' => 'Internal server error occurred'
                    ];
                }
               
            }
            return $this->response->setJSON($response);
        }else{
            log_message('error', 'Internal server error occurred');
        }
    }

    public function getOffer(){

        try {
            $data = $this->webModel->getOffers();
            return $this->response->setJSON(['status' => 200, 'data' => $data]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Internal server error occurred']);
        }

    }

    public function deleteOffer(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $offerId = $this->request->getPost('offerId');
            if (!$offerId) {
                return $this->response->setStatusCode(400)->setJSON([
                    'status' => 400,
                    'message' => 'Invalid offer'
                ]);
            }
            try {

                $checkedOffers = $this->webModel->checkOffer($offerId);

                if(!$checkedOffers){
                    $response = [
                        'status' => 404,
                        'message' => 'Offer not found!'
                    ];
                }

                $this->webModel->deleteOffer($offerId);
                $response = [
                    'status' => 200,
                    'message' => 'Success!'
                ];
               
            }catch(\Exception $e){
                $response = [
                    'status' => 500,
                    'message' => 'Internal server error occurred'
                ];
            }
            return $this->response->setJSON($response);
        }
    }

    public function endOffer($offerId){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $offerId = $this->request->getPost('offerId');
            if (!$offerId) {
                return $this->response->setStatusCode(400)->setJSON([
                    'status' => 400,
                    'message' => 'Invalid offer'
                ]);
            }
            try {

                $checkedOffers = $this->webModel->checkOffer($offerId);

                if(!$checkedOffers){
                    $response = [
                        'status' => 404,
                        'message' => 'Offer not found!'
                    ];
                }

                $this->webModel->endOffer($offerId);
                $response = [
                    'status' => 200,
                    'message' => 'Success!'
                ];
               
            }catch(\Exception $e){
                $response = [
                    'status' => 500,
                    'message' => 'Internal server error occurred'
                ];
            }
            return $this->response->setJSON($response);
        }
    }

    public function getOffersId(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $offerId = $this->request->getPost('offerId');
            if (!$offerId) {
                return $this->response->setStatusCode(400)->setJSON([
                    'status' => 400,
                    'message' => 'Invalid offer'
                ]);
            }
            try {

                $checkedOffers = $this->webModel->checkOffer($offerId);

                if(!$checkedOffers){
                    $response = [
                        'status' => 404,
                        'message' => 'Offer not found!'
                    ];
                }

                $data = $this->webModel->getOfferId($offerId);
                $response = [
                    'status' => 200,
                    'data' => $data
                ];
               
            }catch(\Exception $e){
                $response = [
                    'status' => 500,
                    'message' => 'Internal server error occurred'
                ];
            }
            return $this->response->setJSON($response);
        }
    }

}