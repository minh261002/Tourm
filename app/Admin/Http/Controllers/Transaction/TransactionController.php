<?php

namespace App\Admin\Http\Controllers\Transaction;

use App\Admin\DataTables\Transaction\TransactionDataTable;
use App\Admin\Repositories\Transaction\TransactionRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $repository;

    public function __construct(
        TransactionRepositoryInterface $repository,
    ) {
        $this->repository = $repository;
    }

    public function index(TransactionDataTable $dataTable)
    {
        return $dataTable->render('admin.transaction.index');
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

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');
        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái thành công']);
    }
}