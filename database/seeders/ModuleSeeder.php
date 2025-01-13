<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Module
        DB::table('modules')->insert([
            [
                'name' => 'Quản lý module',
                'description' => 'Quản lý module',
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quản lý quyền',
                'description' => 'Quản lý quyền',
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quản lý vai trò',
                'description' => 'Quản lý vai trò',
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quản lý admin',
                'description' => 'Quản lý admin',
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quản lý chuyên mục',
                'description' => 'Quản lý chuyên mục',
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quản lý bài viết',
                'description' => 'Quản lý bài viết',
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        //Permission
        DB::table('permissions')->insert([
            [
                'title' => 'Xem module',
                'name' => 'viewModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Tạo module',
                'name' => 'createModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Sửa module',
                'name' => 'editModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Xóa module',
                'name' => 'deleteModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Xem quyền',
                'name' => 'viewPermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Tạo quyền',
                'name' => 'createPermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Sửa quyền',
                'name' => 'editPermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Xóa quyền',
                'name' => 'deletePermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Xem vai trò',
                'name' => 'viewRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Tạo vai trò',
                'name' => 'createRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Sửa vai trò',
                'name' => 'editRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Xóa vai trò',
                'name' => 'deleteRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Xem admin',
                'name' => 'viewAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Tạo admin',
                'name' => 'createAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Sửa admin',
                'name' => 'editAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Xóa admin',
                'name' => 'deleteAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Xem chuyên mục',
                'name' => 'viewPostCatalogue',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Tạo chuyên mục',
                'name' => 'createPostCatalogue',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Sửa chuyên mục',
                'name' => 'editPostCatalogue',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Xóa chuyên mục',
                'name' => 'deletePostCatalogue',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Xem bài viết',
                'name' => 'viewPost',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
            [
                'title' => 'Tạo bài viết',
                'name' => 'createPost',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
            [
                'title' => 'Sửa bài viết',
                'name' => 'editPost',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
            [
                'title' => 'Xóa bài viết',
                'name' => 'deletePost',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
        ]);

        //Role
        DB::table('roles')->insert([
            [
                'title' => 'Root',
                'name' => 'root',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        //Role Permission
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],
            [
                'permission_id' => 2,
                'role_id' => 1,
            ],
            [
                'permission_id' => 3,
                'role_id' => 1,
            ],
            [
                'permission_id' => 4,
                'role_id' => 1,
            ],
            [
                'permission_id' => 5,
                'role_id' => 1,
            ],
            [
                'permission_id' => 6,
                'role_id' => 1,
            ],
            [
                'permission_id' => 7,
                'role_id' => 1,
            ],
            [
                'permission_id' => 8,
                'role_id' => 1,
            ],
            [
                'permission_id' => 9,
                'role_id' => 1,
            ],
            [
                'permission_id' => 10,
                'role_id' => 1,
            ],
            [
                'permission_id' => 11,
                'role_id' => 1,
            ],
            [
                'permission_id' => 12,
                'role_id' => 1,
            ],
            [
                'permission_id' => 13,
                'role_id' => 1,
            ],
            [
                'permission_id' => 14,
                'role_id' => 1,
            ],
            [
                'permission_id' => 15,
                'role_id' => 1,
            ],
            [
                'permission_id' => 16,
                'role_id' => 1,
            ],
            [
                'permission_id' => 17,
                'role_id' => 1,
            ],
            [
                'permission_id' => 18,
                'role_id' => 1,
            ],
            [
                'permission_id' => 19,
                'role_id' => 1,
            ],
            [
                'permission_id' => 20,
                'role_id' => 1,
            ],
            [
                'permission_id' => 21,
                'role_id' => 1,
            ],
            [
                'permission_id' => 22,
                'role_id' => 1,
            ],
            [
                'permission_id' => 23,
                'role_id' => 1,
            ],
            [
                'permission_id' => 24,
                'role_id' => 1,
            ],
        ]);

        //Admin
        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\Models\Admin',
                'model_id' => 1,
            ],
        ]);
    }
}
