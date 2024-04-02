<?php

return [
    'admin' => [
        'DT_RowIndex' => [
            'title' => 'STT',
            'width' => '20px',
            'orderable' => false
        ],
        'fullname' => [
            'title' => 'Họ tên',
            'orderable' => false
        ],
        'phone' => [
            'title' => 'Số điện thoại',
            'orderable' => false
        ],
        'email' => [
            'title' => 'Email',
            'orderable' => false,
        ],
        'roles' => [
            'title' => 'Roles',
            'orderable' => false,
        ],
        'created_at' => [
            'title' => 'Ngày tạo',
            'orderable' => false,
            'visible' => false
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center'
        ],
    ],
    'user' => [
        'DT_RowIndex' => [
            'title' => 'STT',
            'width' => '20px',
            'orderable' => false
        ],
        'username' => [
            'title' => 'Tên đăng nhập',
            'orderable' => false,
            'visible' => false
        ],
        'fullname' => [
            'title' => 'Họ tên',
            'orderable' => false
        ],
        'email' => [
            'title' => 'Email',
            'orderable' => false,
        ],
        'phone' => [
            'title' => 'Số điện thoại',
            'orderable' => false
        ],
        'gender' => [
            'title' => 'Giới tính',
            'orderable' => false,
            'visible' => false
        ],
        'vip' => [
            'title' => 'Vip',
            'orderable' => false,
        ],
        'created_at' => [
            'title' => 'Ngày tạo',
            'orderable' => false,
            'visible' => false
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center'
        ],
    ],
    'post' => [
        'DT_RowIndex' => [
            'title' => 'STT',
            'width' => '20px',
            'orderable' => false
        ],
        'title' => [
            'title' => 'Title',
            'orderable' => false,

        ],
        'status' => [
            'title' => 'Status',
            'orderable' => false,
        ],
        'is_featured' => [
            'title' => 'Feature',
            'orderable' => false,
        ],
        // 'content' => [
        //     'title' => 'Content',
        //     'orderable' => false
        // ],
        'slug' => [
            'title' => 'Slug',
            'orderable' => false,
        ],
        'excerpt' => [
            'title' => 'Excerpt',
            'orderable' => false
        ],
        'posted_at' => [
            'title' => 'Posted at',
            'orderable' => false,

        ],

        'created_at' => [
            'title' => 'Ngày tạo',
            'orderable' => false,

        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center'
        ],
    ],
    'employee' => [
        'DT_RowIndex' => [
            'title' => 'STT',
            'width' => '20px',
            'orderable' => false
        ],

        'fullname' => [
            'title' => 'Họ tên',
            'orderable' => false
        ],
        'username' => [
            'title' => 'Tên đăng nhập',
            'orderable' => false,

        ],
        'email' => [
            'title' => 'Email',
            'orderable' => false,
        ],

        'gender' => [
            'title' => 'Giới tính',
            'width' => '20px',

            'orderable' => false,

        ],
        'roles' => [
            'title' => 'Roles',
            'orderable' => false,
        ],

        'created_at' => [
            'title' => 'Ngày tạo',
            'orderable' => false,

        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center'
        ],
    ],
    'category' => [
        'DT_RowIndex' => [
            'title' => 'STT',
            'width' => '20px',
            'orderable' => false
        ],

        'name' => [
            'title' => 'Title',
            'orderable' => false
        ],
        'slug' => [
            'title' => 'Slug',
            'orderable' => false,

        ],
        'status' => [
            'title' => 'Status',
            'orderable' => false,
        ],
        'parent_id' => [
            'title' => 'Parent category',
            'orderable' => false,
        ],

        'created_at' => [
            'title' => 'Ngày tạo',
            'orderable' => false,

        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center'
        ],
    ]
];
