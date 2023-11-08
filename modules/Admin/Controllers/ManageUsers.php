<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;


use App\Libraries\Hash;
use Modules\Admin\Models\AdminModel;
use Ramsey\Uuid\Uuid;

class ManageUsers extends BaseController
{

    private $adminModel;
    public function __construct()
    {
        $this->adminModel = model(AdminModel::class);
    }


    public function manageUsers()
    {
        $data = [];
        try {
            $data['roles'] = $this->adminModel->getRolesNames();
        }catch (\Exception $e) {
            var_dump($e->getMessage());
        }
        return view('Modules\Admin\Views\main\manage-users', $data);
    }

    public function createUser(){

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'email' => 'is_unique[users.email]',

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON(['status' => 500, 'message' => $validation->getError()]);
        }else{
            $getPasswordService = service('generateRandomPassword');
            $sendEmailService = service('send_email');
            $fName = $this->request->getPost('firstName');
            $password = $getPasswordService->generatePassword();
            $subject = "Login Password";
            $message = "Congratulations {$fName}, your account was created successfully. Login with the following password: {$password}";
            $response = $sendEmailService->send_email($fName, $this->request->getPost('email'), $subject, $message);

            if($response){
                $saveMessage = [
                    'message_trail_uuid' => Uuid::uuid4()->toString(),
                    'fname' => $this->request->getPost('firstName'),
                    'lname' => $this->request->getPost('lastName'),
                    'role_uuid' => $this->request->getPost('role'),
                    'message' => "Login Password",
                    'status' => 'sent',
                    'created_at' => date('Y-m-d H:i:s'),
                ];

                $data = [
                    'user_uuid' => Uuid::uuid4()->toString(),
                    'fname' => $this->request->getPost('firstName'),
                    'lname' => $this->request->getPost('lastName'),
                    'email' => $this->request->getPost('email'),
                    'role_uuid' => $this->request->getPost('role'),
                    'password' => password_hash($password, PASSWORD_BCRYPT),
                    'created_at' => date('Y-m-d H:i:s'),
                ];

                try {
                    $this->adminModel->createUser($data);
                    $this->adminModel->saveMessage($saveMessage);
                    return $this->response->setJSON(['status' => 200, 'message' => 'User created successfully']);

                }catch (\Exception $e) {
                    return $this->response->setJSON(['status' => 500, 'message' => $e->getMessage()]);
                }
            }else{
                $saveMessage = [
                    'message_trail_uuid' => Uuid::uuid4()->toString(),
                    'fname' => $this->request->getPost('firstName'),
                    'lname' => $this->request->getPost('lastName'),
                    'role_uuid' => $this->request->getPost('role'),
                    'message' => "Login Password",
                    'status' => 'failed',
                    'created_at' => date('Y-m-d H:i:s'),
                ];
                $this->adminModel->saveMessage($saveMessage);
                return $this->response->setJSON(['status' => 500, 'message' => 'Failed to send password through email']);
            }
        }
    }

    public function getUsers(){
        try{
            $getUsers = $this->adminModel->getUsers();
            return $this->response->setJSON(['status' => 200, 'message' => 'success', 'data' => $getUsers]);
        }catch (\Exception $e) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Something went wrong, please try again']);
        }
    }

    public function newRole()
    {
        $role = $this->request->getPost('roleName');
        $description = $this->request->getPost('roleDescription');

        //check if the role is already created

        $roleExists = $this->adminModel->checkRole($role);

        if($roleExists) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Role already exists, please choose another role name']);
        }

        $data = [
            'role_uuid' => Uuid::uuid4()->toString(),
            'role_name' => $role,
            'role_description' => $description
        ];

        $saveRole = $this->adminModel->newRole($data);

        //assign admin permissions to admin role
        $role_uuid = $data['role_uuid'];
        if($role == 'Admin') {
            $permissions = [
                'create_therapist',
                'edit_therapist',
                'delete_therapist',
                'view_therapist',
                'create_role',
                'edit_role',
                'delete_role',
                'view_role',
                'view_payment',
                'view_online_booking',
                'edit_online_booking',
                'edit_assessment',
                'create_assessment',
                'delete_assessment',
                'view_patients',
                'edit_patients',
            ];

            foreach($permissions as $permission) {
                $data = [
                    'role_permission_uuid' => Uuid::uuid4()->toString(),
                    'role_uuid' => $role_uuid,
                    'permission_uuid' => $this->adminModel->getPermissionUuid($permission)
                ];

                try {
                    $this->adminModel->assignPermissionAdmin($data);
                } catch (\Exception $e) {
                    var_dump($e->getMessage());
                }

            }
        }

        //assign user permissions to Psychologist role

        if($role == 'Psychologist') {
            $permissions = [
                'view_payment',
                'view_online_booking',
                'edit_online_booking',
                'edit_assessment',
                'create_assessment',
                'delete_assessment',
                'view_patients',
                'edit_patients',
            ];

            foreach($permissions as $permission) {
                $data = [
                    'role_permission_uuid' => Uuid::uuid4()->toString(),
                    'role_uuid' => $role_uuid,
                    'permission_uuid' => $this->adminModel->getPermissionUuid($permission)
                ];

                try {
                    $this->adminModel->assignPermissionAuth($data);
                } catch (\Exception $e) {
                    var_dump($e->getMessage());
                }
            }
        }

        //assign user permissions to Psychiatric role

        if($role == 'Psychiatric') {
            $permissions = [
                'view_payment',
                'view_online_booking',
                'edit_online_booking',
                'edit_assessment',
                'create_assessment',
                'delete_assessment',
                'view_patients',
                'edit_patients',
                'update_profile',
                'time_availability',
            ];

            foreach($permissions as $permission) {
                $data = [
                    'role_permission_uuid' => Uuid::uuid4()->toString(),
                    'role_uuid' => $role_uuid,
                    'permission_uuid' => $this->adminModel->getPermissionUuid($permission)
                ];

                try {
                    $this->adminModel->assignPermissionAuth($data);
                } catch (\Exception $e) {
                    var_dump($e->getMessage());
                }
            }
        }

        if($saveRole) {
            $response = [
                'status' => 200,
                'message' => 'Role created successfully'
            ];

            return $this->response->setJSON($response);
        }else{
            $response = [
                'status' => 500,
                'message' => 'Server error, please try again later'
            ];

            return $this->response->setJSON($response);
        }
    }

    public function getRoles()
    {
        try {
            $roles = $this->adminModel->getRoles();

            return $this->response->setJSON($roles);
        } catch (\Exception $e) {

            return $this->response->setJSON($e->getMessage());
        }
    }

    public function editUser($id)
    {

        $data = [];
        try{
            $data['getUser'] = $this->adminModel->getUser($id);
        }catch (\Exception $e) {
            var_dump($e->getMessage());
        }
        return view('Modules\Admin\Views\main\edit-user', $data);
    }


    public function updateUser($id){
        $data = [
            'fname' => $this->request->getPost('fname'),
            'lname' => $this->request->getPost('lname'),
            'email' => $this->request->getPost('email'),
        ];

        try{
            $updateUser = $this->adminModel->updateUser($data, $id);
            if($updateUser){
                return $this->response->setJSON(['status' => 200, 'message' => 'User updated successfully']);
            }
        }catch (\Exception $e) {
            var_dump($e->getMessage());
            return $this->response->setJSON(['status' => 500, 'message' => 'Something went wrong, please try again']);
        }
    }

    public function editRole($id)
    {
        return view('Modules\Admin\Views\main\edit-role');
    }

    public function profile()
    {
        return view('Modules\Admin\Views\main\profile');
    }

    public function updateUserProfile($id){

        $user = [];
        $oldPassword = $this->request->getPost('oldPass');
        $newPassword = Hash::encrypt($this->request->getPost('newPass'));
        try{
            $user['info'] = $this->adminModel->getCurrentLoggedInUser($id);
        }catch(\Exception $e){
            return $this->$e->getMessage();
        }
        if(Hash::decrypt($oldPassword, $user['info']['password'])){
            $data = [
                'password' => $newPassword
            ];
            try{
                $updateUserPass = $this->adminModel->updateUserPass($data, $id);
                if($updateUserPass){
                    return $this->response->setJSON(['status' => 200, 'message' => 'Your password has been updated successfully.']);
                }
            }catch (\Exception $e) {
                var_dump($e->getMessage());
                return $this->response->setJSON(['status' => 500, 'message' => 'Internal server error, please try again.']);
            }
        }else{
            return $this->response->setJSON(['status' => 500, 'message' => 'Your old password is incorrect.']);
        }
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

    public function logout()
    {
        if(session()->has('isLoggedIn')){
            session()->destroy();
            return redirect()->to(base_url('admin/auth/login'));
        }

        return redirect()->to(base_url('admin/auth/login'));
    }

}