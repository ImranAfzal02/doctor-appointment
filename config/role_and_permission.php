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
    'staff' => [
        'appointments' => [
            '*'
        ]
    ]
];
