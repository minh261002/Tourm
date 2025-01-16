<?php

namespace App\Admin\Http\Controllers\User;

use App\Admin\DataTables\User\UserDataTable;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\User\UserRequest;
use App\Models\Province;
use App\Admin\Repositories\User\UserRepositoryInterface;
use App\Admin\Services\User\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        UserRepositoryInterface $repository,
        UserServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('admin.user.index');
    }

    public function create()
    {
        $provinces = Province::all();
        return view('admin.user.create', compact('provinces'));
    }

    public function store(UserRequest $request)
    {
        $this->service->store($request);

        return redirect()->route('admin.user.index')->with('success', 'Thêm thành viên thành công');
    }

    public function edit($id)
    {
        $admin = $this->repository->findOrFail($id);
        $provinces = Province::all();
        return view('admin.user.edit', compact('admin', 'provinces'));
    }

    public function update(UserRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.user.index')->with('success', 'Cập nhật thành viên thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only(['id', 'status']);
        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái thành công']);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa thành viên thành công']);
    }
}
