<?php

namespace App\Admin\Services\Category;

use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryService implements CategoryServiceInterface
{
    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $data = $request->validated();
        if ($data['image'] == null) {
            $data['image'] = '/admin/images/not-found.jpg';
        }
        return $this->repository->create($data);
    }

    public function update(Request $request)
    {
        $data = $request->validated();
        if ($data['image'] == null) {
            $data['image'] = '/admin/images/not-found.jpg';
        }
        return $this->repository->update($data['id'], $data);
    }
}
