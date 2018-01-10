<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'manhole' => 'c,r,u,d',
            'alarm-list' => 'c,r,u,d'
        ],
        'administrator' => [
            'manhole' => 'c,r,u,d',
            'alarm-list' => 'r,u'
        ],
        'noc' => [
            'manhole' => 'c,r,u,d',
            'alarm-list' => 'c,r,u'
        ],
        'seom' => [
            'manhole' => 'r',
            'alarm-list' => 'r',
        ],
        'readonly' => [
            'manhole' => 'r'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
