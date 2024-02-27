<?php
return [
    'admin' => [
        'doctor' => [
            '*'
        ],
        'patients' => [
            'create',
            'edit',
            'delete',
            'view'
        ],
        'appointment' => [
            '*'
        ]
    ],
    'patient' => [
        'patient' => [
            '*'
        ]
    ],
    'doctor' => [
        'patient' => [
            'view'
        ],
        'appointments' => [
            'list',
            'show-details',
            'change-status'
        ]
    ]
];
