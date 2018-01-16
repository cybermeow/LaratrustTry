<?php

return [
    'role_structure' => [
        'superadmin' => [               // role => [module => permissions]
            'manhole' => 'c,r,u,d',
            'alarm-list' => 'c,r,u,d'
        ],
        'admin' => [
            'manhole' => 'c,r,u,d',
            'alarm-list' => 'c,r,u,d'
        ],
        'seom' => [
            'manhole' => 'r',
            'alarm-list' => 'r'
        ],
        'noc' => [
            'alarm-list' => 'r'
        ],
//        'readonly' => [
//            'manhole' => 'r',
//            'alarm-list' => 'r'
//        ],
    ],
//    'permission_structure' => [
//        'readonly' => [                 // user => [module => permissions]
//            'manhole' => 'r',
//            'alarm-list' => 'r'
//        ],
//    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
