<?php
return [
    'admin' => [
        'home_url' => 'admin.dashboard',
        'menu' => [
            [
                'title' => 'Dashboard',
                'route' => 'admin.dashboard',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'hasSubMenu' => false
            ],
            [
                'title' => 'Patients',
                'route' => 'admin.patient.index',
                'icon' => 'nav-icon fas fa-users',
                'hasSubMenu' => false
            ],
            [
                'title' => 'Doctors',
                'route' => 'admin.doctor.index',
                'icon' => 'nav-icon fas fa-user-md',
                'hasSubMenu' => false
            ]
        ]
    ],
    'doctor' => [
        'home_url' => 'doctor.dashboard',
        'menu' => [
        ]
    ],
    'patient' => [
        'home_url' => 'patient.dashboard',
        'menu' => [
        ]
    ]
];
