<?php

namespace App\Admin\Http\Controllers\Destination;

use App\Admin\DataTables\Destination\DestinationDataTable;
use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use App\Admin\Services\Destination\DestinationServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Destination\DestinationRequest;
use Illuminate\Http\Request;

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

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');
        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái thành công']);
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa điểm đến thành công']);
    }
}