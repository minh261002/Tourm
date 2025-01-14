<?php

namespace App\Admin\Http\Controllers\Amenity;

use App\Admin\DataTables\Amenity\AmenityDataTable;
use App\Admin\Repositories\Amenity\AmenityRepositoryInterface;
use App\Admin\Services\Amenity\AmenityServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Amenity\AmenityRequest;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        AmenityRepositoryInterface $repository,
        AmenityServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(AmenityDataTable $dataTable)
    {
        return $dataTable->render('admin.amenity.index');
    }

    public function create()
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $amenityGroups = config('amenities');
        return view('admin.amenity.create', compact('status', 'amenityGroups'));
    }

    public function store(AmenityRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.amenity.index')->with('success', 'Thêm tiện ích mới thành công');
    }

    public function edit(int $id)
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $amenity = $this->repository->findOrFail($id);
        $amenityGroups = config('amenities');
        return view('admin.amenity.edit', compact('amenity', 'status', 'amenityGroups'));
    }

    public function update(AmenityRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.amenity.index')->with('success', 'Cập nhật tiện ích thành công');
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
        return response()->json(['status' => 'success', 'message' => 'Xóa tiện ích thành công']);
    }
}
