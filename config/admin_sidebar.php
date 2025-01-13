<?php

return [
    [
        'active' => ['admin.post_catalogue.*'],
        'show' => ['admin.post_catalogue.*'],
        'title' => 'Quản lý chuyên mục',
        'icon' => 'ti ti-list-letters fs-2',
        'permission' => ['viewPostCatalogue', 'createPostCatalogue', 'editPostCatalogue', 'deletePostCatalogue'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.post_catalogue.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createPostCatalogue'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.post_catalogue.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewPostCatalogue'
            ]
        ]
    ],
    [
        'active' => ['admin.post.*'],
        'show' => ['admin.post.*'],
        'title' => 'Quản lý bài viết',
        'icon' => 'ti ti-inbox fs-2',
        'permission' => ['viewPost', 'createPost', 'editPost', 'deletePost'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.post.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createPost'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.post.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewPost'
            ]
        ]
    ],
    [
        'active' => ['admin.slider.*'],
        'show' => ['admin.slider.*'],
        'title' => 'Quản lý slider',
        'icon' => 'ti ti-library-photo fs-2',
        'permission' => ['viewSlider', 'createSlider', 'editSlider', 'deleteSlider'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.slider.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createSlider'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.slider.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewSlider'
            ]
        ]
    ],
    [
        'active' => ['admin.admin.*'],
        'show' => ['admin.admin.*'],
        'title' => 'Quản trị viên',
        'icon' => 'ti ti-user-shield fs-2',
        'permission' => ['viewAdmin', 'createAdmin', 'editAdmin', 'deleteAdmin'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.admin.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createAdmin'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.admin.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewAdmin'
            ]
        ]
    ],
    [
        'active' => ['admin.role.*'],
        'show' => ['admin.role.*'],
        'title' => 'Quản lý vai trò',
        'icon' => 'ti ti-code fs-2',
        'permission' => ['viewRole', 'createRole', 'editRole', 'deleteRole'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.role.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createRole'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.role.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewRole'
            ]
        ]
    ],
    [
        'active' => ['admin.permission.*'],
        'show' => ['admin.permission.*'],
        'title' => 'Quản lý quyền',
        'icon' => 'ti ti-code fs-2',
        'permission' => ['viewPermission', 'createPermission', 'editPermission', 'deletePermission'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.permission.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createPermission'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.permission.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewPermission'
            ]
        ],
    ],
    [
        'active' => ['admin.module.*'],
        'show' => ['admin.module.*'],
        'title' => 'Quản lý module',
        'icon' => 'ti ti-code fs-2',
        'permission' => ['viewModule', 'createModule', 'editModule', 'deleteModule'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.module.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createModule'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.module.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewModule'
            ]
        ]
    ]
];
