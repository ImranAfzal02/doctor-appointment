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
            ],
            [
                'title' => 'Appointments',
                'route' => 'admin.appointments',
                'icon' => 'nav-icon fas fa-calendar-alt',
                'hasSubMenu' => false
            ]
        ]
    ],
    'patient' => [
        'home_url' => 'patient.dashboard',
        'menu' => [
            [
                'title' => 'Dashboard',
                'route' => 'patient.dashboard',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'hasSubMenu' => false
            ],
            [
                'title' => 'Appointments',
                'route' => 'patient.appointments',
                'icon' => 'nav-icon fas fa-calendar-alt',
                'hasSubMenu' => false
            ]
        ]
    ],
    'staff' => [
        'home_url' => 'staff.dashboard',
        'menu' => [
            [
                'title' => 'Appointments',
                'route' => 'staff.dashboard',
                'icon' => 'nav-icon fas fa-calendar-alt',
                'hasSubMenu' => false
            ]
        ]
    ]
];
