<?php

namespace App\Admin\Http\Controllers\Property;

use App\Admin\DataTables\Property\PropertyDataTable;
use App\Admin\Repositories\Amenity\AmenityRepositoryInterface;
use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use App\Admin\Repositories\Property\PropertyRepositoryInterface;
use App\Admin\Services\Property\PropertyServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Property\PropertyRequest;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    protected $repository;
    protected $destinationRepository;
    protected $amenityRepository;
    protected $service;

    public function __construct(
        PropertyRepositoryInterface $repository,
        DestinationRepositoryInterface $destinationRepository,
        AmenityRepositoryInterface $amenityRepository,
        PropertyServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->destinationRepository = $destinationRepository;
        $this->amenityRepository = $amenityRepository;
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
        $destinations = $this->destinationRepository->getByQueryBuilder([
            'status' => 'active'
        ])->pluck('name', 'id')->toArray();
        $amenityGroups = config('amenities');
        $amenities = [];

        foreach ($amenityGroups as $group => $name) {
            $amenities[$name] = $this->amenityRepository->getByQueryBuilder([
                'amenity_group' => $group
            ])->get();
        }

        return view('admin.property.create', compact('status', 'destinations', 'amenities'));
    }

    public function store(PropertyRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.property.index')->with('success', 'Thêm chỗ ở mới thành công');
    }

    public function edit(int $id)
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $destinations = $this->destinationRepository->getByQueryBuilder([
            'status' => 'active'
        ])->pluck('name', 'id')->toArray();
        $property = $this->repository->findOrFail($id);
        $amenityGroups = config('amenities');
        $amenities = [];

        foreach ($amenityGroups as $group => $name) {
            $amenities[$name] = $this->amenityRepository->getByQueryBuilder([
                'amenity_group' => $group
            ])->get();
        }

        return view('admin.property.edit', compact('property', 'status', 'amenities', 'destinations'));
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