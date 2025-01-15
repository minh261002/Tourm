<?php

namespace App\Admin\Http\Controllers\Property;

use App\Admin\DataTables\Property\PropertyDataTable;
use App\Admin\Repositories\Property\PropertyRepositoryInterface;
use App\Admin\Services\Property\PropertyServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Property\PropertyRequest;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        PropertyRepositoryInterface $repository,
        PropertyServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(PropertyDataTable $dataTable)
    {
        return $dataTable->render('admin.property.index');
    }

    public function create()
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $amenityGroups = config('amenities');
        return view('admin.property.create', compact('status', 'amenityGroups'));
    }

    public function store(PropertyRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.amenity.index')->with('success', 'Thêm chỗ ở mới thành công');
    }

    public function edit(int $id)
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $amenity = $this->repository->findOrFail($id);
        $amenityGroups = config('amenities');
        return view('admin.property.edit', compact('amenity', 'status', 'amenityGroups'));
    }

    public function update(PropertyRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.property.index')->with('success', 'Cập nhật chỗ ở thành công');
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
        return response()->json(['status' => 'success', 'message' => 'Xóa chỗ ở thành công']);
    }
}