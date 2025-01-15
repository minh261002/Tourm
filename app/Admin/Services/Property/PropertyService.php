<?php

namespace App\Admin\Services\Property;

use App\Admin\Repositories\Property\PropertyRepositoryInterface;
use Illuminate\Http\Request;

class PropertyService implements PropertyServiceInterface
{
    protected $repository;

    public function __construct(PropertyRepositoryInterface $repository)
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