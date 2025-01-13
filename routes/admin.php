<?php

use App\Admin\Http\Controllers\Admin\AdminController;
use App\Admin\Http\Controllers\Auth\AuthController;
use App\Admin\Http\Controllers\Dashboard\DashboardController;
use App\Admin\Http\Controllers\Module\ModuleController;
use App\Admin\Http\Controllers\Permission\PermissionController;
use App\Admin\Http\Controllers\Role\RoleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post');

        Route::get('/password/forgot', [AuthController::class, 'forgotPassword'])->name('password.forgot');
        Route::post('/password/email', [AuthController::class, 'sendResetLink'])->name('password.email');

        Route::get('/password/reset', [AuthController::class, 'resetPassword'])->name('password.reset');
        Route::post('/password/update', [AuthController::class, 'updatePassword'])->name('password.update');
    });


    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // Module
        Route::prefix('module')->as('module.')->group(function () {
            Route::middleware(['permission:viewModule'])->group(function () {
                Route::get('/', [ModuleController::class, 'index'])->name('index');
            });

            Route::middleware(['permission:createModule'])->group(function () {
                Route::get('/create', [ModuleController::class, 'create'])->name('create');
                Route::post('/store', [ModuleController::class, 'store'])->name('store');
            });

            Route::middleware(['permission:editModule'])->group(function () {
                Route::get('/edit/{id}', [ModuleController::class, 'edit'])->name('edit');
                Route::put('/update', [ModuleController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deleteModule'])->group(function () {
                Route::delete('/delete/{id}', [ModuleController::class, 'delete'])->name('delete');
            });
        });

        // Permission
        Route::prefix('permission')->as('permission.')->group(function () {
            Route::middleware(['permission:viewPermission'])->group(function () {
                Route::get('/', [PermissionController::class, 'index'])->name('index');
                Route::get('/{id}', [PermissionController::class, 'edit'])->name('edit');
            });

            Route::middleware(['permission:createPermission'])->group(function () {
                Route::post('create', [PermissionController::class, 'create'])->name('create');
            });

            Route::middleware(['permission:editPermission'])->group(function () {
                Route::put('/{id}', [PermissionController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deletePermission'])->group(function () {
                Route::delete('/{id}', [PermissionController::class, 'destroy'])->name('delete');
            });
        });

        //Role
        Route::prefix('role')->as('role.')->group(function () {
            Route::middleware(['permission:viewRole'])->group(function () {
                Route::get('/', [RoleController::class, 'index'])->name('index');
                Route::get('/getModules', [RoleController::class, 'getModules'])->name('getModules');
                Route::get('/{id}', [RoleController::class, 'edit'])->name('edit');
            });

            Route::middleware(['permission:createRole'])->group(function () {
                Route::post('create', [RoleController::class, 'create'])->name('create');
            });

            Route::middleware(['permission:editRole'])->group(function () {
                Route::put('/{id}', [RoleController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deleteRole'])->group(function () {
                Route::delete('/{id}', [RoleController::class, 'destroy'])->name('delete');
            });
        });

        //Admin
        Route::prefix('admin')->as('admin.')->group(function () {
            Route::middleware(['permission:viewAdmin'])->group(function () {
                Route::get('/', [AdminController::class, 'index'])->name('index');
                Route::get('/{id}', [AdminController::class, 'edit'])->name('edit');
            });

            Route::middleware(['permission:createAdmin'])->group(function () {
                Route::post('create', [AdminController::class, 'create'])->name('create');
            });

            Route::middleware(['permission:editAdmin'])->group(function () {
                Route::put('/update', [AdminController::class, 'update'])->name('update');
            });

            Route::middleware(['permission:deleteAdmin'])->group(function () {
                Route::delete('/{id}', [AdminController::class, 'destroy'])->name('delete');
            });
        });
    });
});
