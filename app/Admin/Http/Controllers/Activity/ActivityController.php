<?php

namespace App\Admin\Http\Controllers\Activity;

use App\Admin\DataTables\Activity\ActivityDataTable;
use App\Admin\Repositories\Activity\ActivityRepositoryInterface;
use App\Admin\Services\Activity\ActivityServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Activity\ActivityRequest;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        ActivityRepositoryInterface $repository,
        ActivityServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(ActivityDataTable $dataTable)
    {
        return $dataTable->render('admin.activity.index');
    }

    public function create()
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        return view('admin.activity.create', compact('status'));
    }

    public function store(ActivityRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.activity.index')->with('success', 'Thêm hoạt động mới thành công');
    }

    public function edit(int $id)
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $activity = $this->repository->findOrFail($id);
        return view('admin.activity.edit', compact('activity', 'status'));
    }

    public function update(ActivityRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.activity.index')->with('success', 'Cập nhật hoạt động thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');
        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái thành công']);
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa hoạt động thành công']);
    }
}
