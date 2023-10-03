<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use Modules\Admin\Models\AdminModel;
use Ramsey\Uuid\Uuid;

class Auth extends BaseController
{
    public function login()
    {
        return view('main/auth/login');
    }

    public function loginUser()
    {
        $adminModel = model(AdminModel::class);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $adminModel->getUserByEmail($email);
        if($user){
            if(Hash::decrypt($password, $user['password'])) {
                $logInActivity = [
                    'user_login_activity_uuid' => Uuid::uuid4()->toString(),
                    'user_uuid' => $user['user_uuid'],
                    'login_time' => date('Y-m-d H:i:s'),
                ];

                $session = [
                    'user_uuid' => $user['user_uuid'],
                    'fname' => $user['fname'],
                    'lname' => $user['lname'],
                    'role_uuid' => $user['role_uuid'],
                    'role_name' => $user['role_name'],
                    'isLoggedIn' => true,
                ];

                session()->set($session);

                try{
                    $adminModel->createUserLoginActivity($logInActivity);
                }catch (\Exception $e) {
                    var_dump($e->getMessage());
                }
                return $this->response->setJSON(['status' => 200, 'message' => 'Login successful.']);
            }else{
                return $this->response->setJSON(['status' => 500, 'message' => 'Invalid password, please try again.']);
            }
        }else{
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid user, please try again.']);
        }
    }

    public function logoutUser()
    {
        $adminModel = model(AdminModel::class);
        if(session()->has('isLoggedIn')){
            $logInActivity = [
                'user_uuid' => session()->get('user_uuid'),
                'logout_time' => date('Y-m-d H:i:s'),
            ];
            try{
                $logoutTime =  $adminModel->updateLoginActivity($logInActivity, session()->get('user_uuid'));
                if($logoutTime) {
                    session()->destroy();
                    return redirect()->to(base_url('auth/login'));
                }
            }catch (\Exception $e) {
                var_dump($e->getMessage());
            }

        }

    }


}