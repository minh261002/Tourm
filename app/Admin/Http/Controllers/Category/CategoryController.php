<?php

namespace App\Admin\Http\Controllers\Category;

use App\Admin\DataTables\Category\CategoryDataTable;
use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use App\Admin\Services\Category\CategoryServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Category\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        CategoryRepositoryInterface $repository,
        CategoryServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.category.index');
    }

    public function create()
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        return view('admin.category.create', compact('status'));
    }

    public function store(CategoryRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.category.index')->with('success', 'Thêm danh mục mới thành công');
    }

    public function edit(int $id)
    {
        $status = [
            'active' => 'Đang hoạt động',
            'inactive' => 'Ngưng hoạt động',
        ];
        $category = $this->repository->findOrFail($id);
        return view('admin.category.edit', compact('category', 'status'));
    }

    public function update(CategoryRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.category.index')->with('success', 'Cập nhật danh mục thành công');
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
        return response()->json(['status' => 'success', 'message' => 'Xóa danh mục thành công']);
    }
}
