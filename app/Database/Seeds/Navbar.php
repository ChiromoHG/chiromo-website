<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Modules\Admin\Models\AdminModel;
use Ramsey\Uuid\Uuid;

class Navbar extends Seeder
{
    public function run()
    {

        $navbar = [
            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'Dashboard',
                'navbar_url' => '/admin/dashboard',
                'navbar_icon' => 'uil uil-estate',
                'navbar_order' => 0,
                'owner' => ['admin', 'therapist'],
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'Profile',
                'navbar_url' => '/admin/dashboard/manage_users/profile',
                'navbar_icon' => 'uil uil-user-circle',
                'navbar_order' => 1,
                'owner' => ['admin', 'therapist'],
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'Patients',
                'navbar_url' => '',
                'navbar_icon' => 'uil uil-file-export',
                'navbar_order' => 2,
                'owner' => ['admin', 'therapist'],
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'Appointments',
                'navbar_url' => '',
                'navbar_icon' => 'uil uil-chart',
                'navbar_order' => 3,
                'owner' => ['admin', 'therapist'],
                'created_at' => date('Y-m-d H:i:s'),
            ],

            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'Payments',
                'navbar_url' => '',
                'navbar_icon' => 'uil uil-money-withdraw',
                'navbar_order' => 4,
                'owner' => ['admin', 'therapist'],
                'created_at' => date('Y-m-d H:i:s'),
            ],

            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'Assessments',
                'navbar_url' => '',
                'navbar_icon' => 'uil uil-copy-landscape',
                'navbar_order' => 5,
                'owner' => ['admin', 'therapist'],
                'created_at' => date('Y-m-d H:i:s'),
            ],

            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'User Management',
                'navbar_url' => 'admin/dashboard/manage_users',
                'navbar_icon' => 'uil uil-users-alt',
                'navbar_order' => 6,
                'owner' => ['admin'],
                'created_at' => date('Y-m-d H:i:s'),
            ],

            [
                'navbar_uuid' => Uuid::uuid4()->toString(),
                'navbar_name' => 'Reports',
                'navbar_url' => 'admin/dashboard/manage_users',
                'navbar_icon' => 'uil uil-file-blank',
                'navbar_order' => 7,
                'owner' => ['admin'],
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $navbarModel = model(AdminModel::class);

        $navbarModel->truncateNavbar();

        foreach ($navbar as $item) {
            $data = [
                'navbar_uuid' => $item['navbar_uuid'],
                'navbar_name' => $item['navbar_name'],
                'navbar_url' => $item['navbar_url'],
                'navbar_icon' => $item['navbar_icon'],
                'navbar_order' => $item['navbar_order'],
                'owner' => json_encode($item['owner']),
                'created_at' => $item['created_at'],
            ];

            $navbarModel->insertNavbar($data);
        }
    }
}
