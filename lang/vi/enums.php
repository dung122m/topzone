<?php

use App\Enums\Admin\AdminRoles;
use App\Enums\Post\PostStatus;
use App\Enums\Post\PostFeature;
use App\Enums\Employee\EmployeeRole;
use App\Enums\Employee\EmployeeGender;
use App\Enums\User\{UserGender, UserVip, UserRoles};

return [
    AdminRoles::class => [
        AdminRoles::SuperAdmin->value => 'Dev',
        AdminRoles::Admin->value => 'Admin',
    ],
    UserGender::class => [
        UserGender::Male->value => 'Nam',
        UserGender::Female->value => 'Nữ',
        UserGender::Other->value => 'Khác',
    ],
    UserVip::class => [
        UserVip::Bronze->value => 'Đồng',
        UserVip::Silver->value => 'Bạc',
        UserVip::Gold->value => 'Vàng',
        UserVip::Diamond->value => 'Kim cương',
    ],
    UserRoles::class => [
        UserRoles::Member->value => 'Thành viên',
    ],
    PostStatus::class => [
        PostStatus::Hide->value => "Hide",
        PostStatus::Show->value => "Show",
    ],
    PostFeature::class => [
        PostFeature::Yes->value => "Yes",
        PostFeature::No->value => "No",
    ],
    EmployeeRole::class => [
        EmployeeRole::Employee->value => "Nhân viên",
        EmployeeRole::Manager->value => "Quản lý",

    ],
    EmployeeGender::class => [
        EmployeeGender::Male->value => 'Nam',
        EmployeeGender::Female->value => 'Nữ',
        EmployeeGender::Other->value => 'Khác',
    ],
];
