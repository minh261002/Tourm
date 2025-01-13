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
        return view('admin.destination.create', compact('status'));
    }

    public function store(DestinationRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.destination.index')->with('success', 'Thêm điểm đến mới thành công');
    }

    public function edit(int $id)
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $destination = $this->repository->findOrFail($id);
        return view('admin.destination.edit', compact('destination', 'status'));
    }

    public function update(DestinationRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.destination.index')->with('success', 'Cập nhật điểm đến thành công');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa module thành công']);
    }
}
