<?php

return [
    [
        'active' => ['admin.amenity.*'],
        'show' => ['admin.amenity.*'],
        'title' => 'Quản lý tiện ích',
        'icon' => 'ti ti-star fs-2',
        'permission' => ['viewAmenity', 'createAmenity', 'editAmenity', 'deleteAmenity'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.amenity.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createAmenity'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.amenity.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewAmenity'
            ]
        ]
    ],
    [
        'active' => ['admin.category.*'],
        'show' => ['admin.category.*'],
        'title' => 'Quản lý danh mục',
        'icon' => 'ti ti-category-2 fs-2',
        'permission' => ['viewCategory', 'createCategory', 'editCategory', 'deleteCategory'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.category.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createCategory'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.category.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewCategory'
            ]
        ]
    ],
    [
        'active' => ['admin.activity.*'],
        'show' => ['admin.activity.*'],
        'title' => 'Quản lý hoạt động',
        'icon' => 'ti ti-rocket fs-2',
        'permission' => ['viewActivity', 'createActivity', 'editActivity', 'deleteActivity'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.activity.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createActivity'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.activity.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewActivity'
            ]
        ]
    ],
    [
        'active' => ['admin.destination.*'],
        'show' => ['admin.destination.*'],
        'title' => 'Quản lý điểm đến',
        'icon' => 'ti ti-map-pin fs-2',
        'permission' => ['viewDestination', 'createDestination', 'editDestination', 'deleteDestination'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.destination.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createDestination'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.destination.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewDestination'
            ]
        ]
    ],
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