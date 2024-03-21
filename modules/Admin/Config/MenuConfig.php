<?php

namespace Modules\Admin\Config;

use CodeIgniter\Config\BaseConfig;

class MenuConfig extends BaseConfig{
    public static $menuItems =[

        'Admin' => [
            [
                'url' => 'admin/dashboard',
                'icon' => 'uil uil-estate',
                'label' => 'Dashboard',
            ],

            [
                'url' => 'admin/dashboard/psychologists',
                'icon' => 'uil uil-file-export',
                'label' => 'Psychologists',
            ],
            [
                'url' => 'admin/dashboard/psychiatrists',
                'icon' => 'uil uil-file-export',
                'label' => 'Psychiatrists',
            ],
            [
                'url' => 'admin/dashboard/patients',
                'icon' => 'uil uil-file-export',
                'label' => 'Patients',
            ],
            [
                'url' => 'admin/dashboard/appointments',
                'icon' => 'uil uil-chart',
                'label' => 'Appointments',
            ],
            [
                'url' => 'admin/dashboard/payments',
                'icon' => 'uil uil-money-withdraw',
                'label' => 'Payments',
            ],
            [
                'url' => 'admin/dashboard/manage_assessments',
                'icon' => 'uil uil-copy-landscape',
                'label' => 'Assessments',
            ],
            [
                'url' => 'admin/dashboard/manage_users',
                'icon' => 'uil uil-users-alt',
                'label' => 'Users Management',
            ],

            [
                'url' => 'admin/dashboard/reports',
                'icon' => 'uil uil-file-blank',
                'label' => 'Reports',
            ],

            [
                'url' => 'admin/dashboard/manage_users/profile',
                'icon' => 'uil uil-user-circle',
                'label' => 'Profile',
            ]
        ],

        'Psychiatric' => [
            [
                'url' => 'admin/dashboard',
                'icon' => 'uil uil-estate',
                'label' => 'Dashboard',
            ],

            [
                'url' => 'admin/dashboard/psychiatrists',
                'icon' => 'uil uil-file-export',
                'label' => 'Psychiatric',
            ],
            [
                'url' => 'admin/dashboard/patients',
                'icon' => 'uil uil-file-export',
                'label' => 'Patients',
            ],
            [
                'url' => 'admin/dashboard/appointments',
                'icon' => 'uil uil-chart',
                'label' => 'Appointments',
            ],
            [
                'url' => 'admin/dashboard/payments',
                'icon' => 'uil uil-money-withdraw',
                'label' => 'Payments',
            ],

            [
                'url' => 'admin/dashboard/reports',
                'icon' => 'uil uil-file-blank',
                'label' => 'Reports',
            ],

            [
                'url' => 'admin/dashboard/manage_users/profile',
                'icon' => 'uil uil-user-circle',
                'label' => 'Profile',
            ]
        ],

        'Psychologist' => [
            [
                'url' => 'admin/dashboard',
                'icon' => 'uil uil-estate',
                'label' => 'Dashboard',
            ],

            [
                'url' => 'admin/dashboard/psychologists',
                'icon' => 'uil uil-file-export',
                'label' => 'Psychologists',
            ],
            [
                'url' => 'admin/dashboard/patients',
                'icon' => 'uil uil-file-export',
                'label' => 'Patients',
            ],
            [
                'url' => 'admin/dashboard/appointments',
                'icon' => 'uil uil-chart',
                'label' => 'Appointments',
            ],
            [
                'url' => 'admin/dashboard/payments',
                'icon' => 'uil uil-money-withdraw',
                'label' => 'Payments',
            ],

            [
                'url' => 'admin/dashboard/reports',
                'icon' => 'uil uil-file-blank',
                'label' => 'Reports',
            ],

            [
                'url' => 'admin/dashboard/manage_users/profile',
                'icon' => 'uil uil-user-circle',
                'label' => 'Profile',
            ]
        ],
    ];
}