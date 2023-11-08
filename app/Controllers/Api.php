<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApiModel;
use App\Libraries\Hash;
use Ramsey\Uuid\Uuid;

class Api extends BaseController
{

    private $apiModel;
    public function __construct()
    {
        $this->apiModel = model(ApiModel::class);
    }
    public function registerPatient()
    {
        $fname = $this->request->getPost("fname");
        $lname = $this->request->getPost("lname");
        $email = $this->request->getPost("email");
        $phone = $this->request->getPost("phone");
        $password = $this->request->getPost("password");


        $data = [
            "patient_uuid" => Uuid::uuid4()->toString(),
            "fname" => $fname,
            "lname" => $lname,
            "email" => $email,
            "phone" => $phone,
            "password" => Hash::encrypt($password),

        ];

        try {

            // check if the user exists
            $user = $this->apiModel->checkPatient($phone, $email);
            if($user){
                return $this->response->setJSON(["status" => 500, "message" => "Email or Phone number already exists!"]);
            }else{
                $this->apiModel->registerPatient($data);
                return $this->response->setJSON(["status" => 200, "message" => "Registration success, please login!"]);
            }
        }catch (\Exception $ex){

            return $ex;
        }

    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');


        $patient = $this->apiModel->getUserByEmail($email);


        if ($patient) {
            if (Hash::decrypt($password, $patient['password'])) {

                $session = [
                    'patient_uuid' => $patient['patient_uuid'],
                    'fname' => $patient['fname'],
                    'lname' => $patient['lname'],
                    'phone' => $patient['phone'],
                    'email' => $patient['email'],
                    'isLoggedIn' => true,
                ];

                session()->set($session);

                return $this->response->setJSON(['status' => 200, 'message' => 'Login successful.']);
            } else {
                return $this->response->setJSON(['status' => 500, 'message' => 'Invalid password, please try again.']);
            }
        } else {
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid user, please try again.']);
        }
    }

    public function logout()
    {
        if(session()->has('isLoggedIn')){
            session()->destroy();
            return redirect()->to(base_url());
        }

        return redirect()->to(base_url());
    }

}
