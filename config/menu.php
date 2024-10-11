<?php

return [
    [
        'route-active' => 'dashboard',
        'label' => 'Dashboard',
        'icon' => 'bx-home-circle',
        'route-name' => 'dashboard',
        'admin-only' => false,
    ],

    // [
    //     'route-active' => 'clubheads',
    //     'label' => 'Club Head',
    //     'icon' => 'bx-archive',
    //     'submenu' => [
    //         [
    //             'route-active' => 'type',
    //             'label' => 'Type',
    //             // 'route-name' => '#',
    //         ],
    //         [
    //             'route-active' => 'list',
    //             'label' => 'List',
    //             // 'route-name' => '#',
    //         ],
    //         [
    //             'route-active' => 'barcode',
    //             'label' => 'Barcode',
    //             // 'route-name' => '#',
    //         ],
    //     ],
    //     'admin-only' => false,
    // ],

    // [
    //     'route-active' => 'reports',
    //     'label' => 'Reports',
    //     'icon' => 'bx-chart',
    //     'route-name' => 'reports',
    //     'admin-only' => false,
    // ],
    [
        'route-active' => 'user',
        'label' => 'Users',
        'icon' => 'bx-user',
        'route-name' => 'user',
    ],
    [
        'route-active' => 'property',
        'label' => 'Property',
        'icon' => 'bx-building-house',
        'route-name' => 'Property',
        'submenu' => [
            [
                'route-active' => 'type',
                'label' => 'Type',

                'route-name' => 'type',
            ],
            [
                'route-active' => 'spesifikasi',
                'label' => 'Spesifikasi',

                'route-name' => 'spesifikasi',
            ],
            [
                'route-active' => 'list',
                'label' => 'List',

                'route-name' => 'property.list',
            ],
        ]
    ],
    [
        'route-active' => 'transaksi',
        'label' => 'Transaksi',
        'icon' => 'bx-wallet',
        'route-name' => 'transaksi',
        'submenu' => [
            [
                'route-active' => 'book',
                'label' => 'Booking',
                'route-name' => 'book',

            ],
            [

                'route-active' => 'Penjualan',
                'label' => 'Penjualan',
                'route-name' => 'penjualan',
            ],
        ]
    ],
    [
        'route-active' => 'laporan',
        'label' => 'Laporan',
        'icon' => 'bx-book',
        'route-name' => 'penjualan',
    ],
];
