<?php

namespace App\Admin\Http\Controllers\Activity;

use App\Admin\DataTables\Activity\ActivityDataTable;
use App\Admin\Repositories\Activity\ActivityRepositoryInterface;
use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use App\Admin\Services\Activity\ActivityServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Activity\ActivityRequest;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $repository;
    protected $categoryRepository;
    protected $destinationRepository;
    protected $service;

    public function __construct(
        ActivityRepositoryInterface $repository,
        CategoryRepositoryInterface $categoryRepository,
        DestinationRepositoryInterface $destinationRepository,
        ActivityServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
        $this->destinationRepository = $destinationRepository;
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
        $categories = $this->categoryRepository->getByQueryBuilder(
            ['status' => 'active']
        )->pluck('name', 'id')->toArray();
        $destinations = $this->destinationRepository->getByQueryBuilder(
            ['status' => 'active']
        )->pluck('name', 'id')->toArray();
        return view('admin.activity.create', compact('status', 'categories', 'destinations'));
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
        $categories = $this->categoryRepository->getByQueryBuilder(
            ['status' => 'active']
        )->pluck('name', 'id')->toArray();
        $destinations = $this->destinationRepository->getByQueryBuilder(
            ['status' => 'active']
        )->pluck('name', 'id')->toArray();
        $destination_ids = $activity->destinations->pluck('id')->toArray();
        return view('admin.activity.edit', compact('activity', 'status', 'categories', 'destinations', 'destination_ids'));
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
