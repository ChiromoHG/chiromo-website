<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Modules\Admin\Models\AdminModel;
use Ramsey\Uuid\Uuid;

class Sidebar extends Seeder
{
    public function run()
    {
        $sideBar = [
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Dashboard',
                'sidebar_url' => 'admin/dashboard',
                'sidebar_icon' => 'uil uil-estate',
                'sidebar_order' => 1,
                'owner' => 'Admin',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Schedule Time',
                'sidebar_url' => 'admin/dashboard/time_slots',
                'sidebar_icon' => 'uil uil-file-export',
                'sidebar_order' => 2,
                'owner' => 'Admin',
            ],

            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Patients',
                'sidebar_url' => 'admin/dashboard/patients',
                'sidebar_icon' => 'uil uil-user-arrows',
                'sidebar_order' => 4,
                'owner' => 'Admin',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Appointments',
                'sidebar_url' => 'admin/dashboard/appointments',
                'sidebar_icon' => 'uil uil-chart',
                'sidebar_order' => 5,
                'owner' => 'Admin',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Billing',
                'sidebar_url' => 'admin/dashboard/billing',
                'sidebar_icon' => 'uil uil-money-withdraw',
                'sidebar_order' => 6,
                'owner' => 'Admin',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Master',
                'sidebar_url' => 'admin/dashboard/master',
                'sidebar_icon' => 'uil uil-link-h',
                'sidebar_order' => 8,
                'owner' => 'Admin',

            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Reports',
                'sidebar_url' => 'admin/dashboard/reports',
                'sidebar_icon' => 'uil uil-file-blank',
                'sidebar_order' => 9,
                'owner' => 'Admin',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Profile',
                'sidebar_url' => 'admin/dashboard/manage_users/profile',
                'sidebar_icon' => 'uil uil-user-circle',
                'sidebar_order' => 10,
                'owner' => 'Admin',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Dashboard',
                'sidebar_url' => 'admin/dashboard',
                'sidebar_icon' => 'uil uil-estate',
                'sidebar_order' => 1,
                'owner' => 'Psychiatric',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Schedule Time',
                'sidebar_url' => 'admin/dashboard/time_slots',
                'sidebar_icon' => 'uil uil-file-export',
                'sidebar_order' => 2,
                'owner' => 'Psychiatric',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Patients',
                'sidebar_url' => 'admin/dashboard/patients',
                'sidebar_icon' => 'uil uil-user-arrows',
                'sidebar_order' => 3,
                'owner' => 'Psychiatric',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Appointments',
                'sidebar_url' => 'admin/dashboard/appointments',
                'sidebar_icon' => 'uil uil-chart',
                'sidebar_order' => 4,
                'owner' => 'Psychiatric',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Billing',
                'sidebar_url' => 'admin/dashboard/billing',
                'sidebar_icon' => 'uil uil-money-withdraw',
                'sidebar_order' => 5,
                'owner' => 'Psychiatric',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Reports',
                'sidebar_url' => 'admin/dashboard/reports',
                'sidebar_icon' => 'uil uil-copy-landscape',
                'sidebar_order' => 6,
                'owner' => 'Psychiatric',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Profile',
                'sidebar_url' => 'admin/dashboard/manage_users/profile',
                'sidebar_icon' => 'uil uil-user-circle',
                'sidebar_order' => 7,
                'owner' => 'Psychiatric',
            ],

            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Dashboard',
                'sidebar_url' => 'admin/dashboard',
                'sidebar_icon' => 'uil uil-estate',
                'sidebar_order' => 1,
                'owner' => 'Psychologist',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Schedule Time',
                'sidebar_url' => 'admin/dashboard/time_slots',
                'sidebar_icon' => 'uil uil-file-export',
                'sidebar_order' => 2,
                'owner' => 'Psychologist',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Patients',
                'sidebar_url' => 'admin/dashboard/patients',
                'sidebar_icon' => 'uil uil-user-arrows',
                'sidebar_order' => 3,
                'owner' => 'Psychologist',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Appointments',
                'sidebar_url' => 'admin/dashboard/appointments',
                'sidebar_icon' => 'uil uil-chart',
                'sidebar_order' => 4,
                'owner' => 'Psychologist',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Billing',
                'sidebar_url' => 'admin/dashboard/billing',
                'sidebar_icon' => 'uil uil-money-withdraw',
                'sidebar_order' => 5,
                'owner' => 'Psychologist',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Reports',
                'sidebar_url' => 'admin/dashboard/reports',
                'sidebar_icon' => 'uil uil-copy-landscape',
                'sidebar_order' => 6,
                'owner' => 'Psychologist',
            ],
            [
                'sidebar_uuid' => Uuid::uuid4()->toString(),
                'sidebar_label' => 'Profile',
                'sidebar_url' => 'admin/dashboard/manage_users/profile',
                'sidebar_icon' => 'uil uil-user-circle',
                'sidebar_order' => 7,
                'owner' => 'Psychologist',
            ]
        ];

        $deleteSideBar = model(AdminModel::class);

        $getAllSideBar = $deleteSideBar->getAllSideBar();

        if (count($getAllSideBar) > 0) {
            try{
                foreach ($getAllSideBar as $sideBar) {
                    $deleteSideBar->deleteSideBar($sideBar['sidebar_uuid']);
                }
            }catch (\Exception $e){
                echo $e->getMessage();
                return false;
            }
        }

        $insertSideBar = model(AdminModel::class);

        try{

            foreach ($sideBar as $sideBars) {
                $insertSideBar->insertSideBar($sideBars);
            }
        }catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }

    }
}
