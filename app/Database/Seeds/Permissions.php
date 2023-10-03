<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Modules\Admin\Models\AdminModel;
use Ramsey\Uuid\Uuid;

class Permissions extends Seeder
{
    public function run()
    {

        $permissions = [
            //admin permissions
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'create_therapist',
                'permission_description' => 'Create a therapist',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_therapist',
                'permission_description' => 'Edit a therapist',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'delete_therapist',
                'permission_description' => 'Delete a therapist',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_therapist',
                'permission_description' => 'View a user',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'create_role',
                'permission_description' => 'Create a new role',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_role',
                'permission_description' => 'Edit a role',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'delete_role',
                'permission_description' => 'Delete a role',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_role',
                'permission_description' => 'View a role',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_payment',
                'permission_description' => 'View payment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_online_booking',
                'permission_description' => 'View online booking details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_online_booking',
                'permission_description' => 'Edit online booking details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_assessment',
                'permission_description' => 'Edit assessment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'create_assessment',
                'permission_description' => 'Create assessment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'delete_assessment',
                'permission_description' => 'Delete assessment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_patients',
                'permission_description' => 'View patients details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],

            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_patients',
                'permission_description' => 'Edit patients details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            //Therapist permissions
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_payment',
                'permission_description' => 'View payment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_online_booking',
                'permission_description' => 'View online booking details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_online_booking',
                'permission_description' => 'Edit online booking details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_assessment',
                'permission_description' => 'Edit assessment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'create_assessment',
                'permission_description' => 'Create assessment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'delete_assessment',
                'permission_description' => 'Delete assessment details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'view_patients',
                'permission_description' => 'View patients details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission_uuid' => Uuid::uuid4()->toString(),
                'permission_name' => 'edit_patients',
                'permission_description' => 'Edit patients details of patient',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $deletePermissions = model(AdminModel::class);

        $getAllPermissions = $deletePermissions->getAllPermissions();

        if (count($getAllPermissions) > 0) {
            try {
                foreach ($getAllPermissions as $permission) {
                    $deletePermissions->deletePermission($permission['permission_uuid']);
                }
            }catch (\Exception $e){
                var_dump($e->getMessage());
                var_dump($e->getTraceAsString());
                return false;
            }

        }

        $insertPermissions = model(AdminModel::class);


        try {
            foreach ($permissions as $permission) {
                $insertPermissions->insertPermission($permission);
            }
        }catch (\Exception $e){
            var_dump($e->getMessage());
            var_dump($e->getTraceAsString());
            return false;
        }
    }
}
