<?php

namespace App\Admin\Http\Controllers\Destination;

use App\Admin\DataTables\Destination\DestinationDataTable;
use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use App\Admin\Services\Destination\DestinationServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Destination\DestinationRequest;

class DestinationController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        DestinationRepositoryInterface $repository,
        DestinationServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(DestinationDataTable $dataTable)
    {
        return $dataTable->render('admin.destination.index');
    }

    public function create()
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        return view('admin.module.create', compact('status'));
    }

    public function store(ModuleRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.module.index')->with('success', 'Thêm module mới thành công');
    }

    public function edit(int $id)
    {
        $status = [
            '1' => 'Chưa hoàn thành',
            '2' => 'Đã hoàn thành',
        ];
        $module = $this->repository->findOrFail($id);
        return view('admin.module.edit', compact('module', 'status'));
    }

    public function update(ModuleRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.module.index')->with('success', 'Cập nhật module thành công');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa module thành công']);
    }
}