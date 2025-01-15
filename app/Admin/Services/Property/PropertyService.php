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
        if (!isset($data['gallery'])) {
            $data['gallery'] = json_encode([]);
        } else {
            $data['gallery'] = json_encode($data['gallery']);
        }

        $amenities = $data['amenities'];
        unset($data['amenities']);

        $property = $this->repository->create($data);

        $property->amenities()->sync($amenities);
        return $property;
    }

    public function update(Request $request)
    {
        $data = $request->validated();
        if ($data['image'] == null) {
            $data['image'] = '/admin/images/not-found.jpg';
        }

        if (!isset($data['gallery'])) {
            $data['gallery'] = json_encode([]);
        } else {
            $data['gallery'] = json_encode($data['gallery']);
        }

        $amenities = $data['amenities'];
        unset($data['amenities']);

        $property = $this->repository->update($data['id'], $data);

        $property->amenities()->sync($amenities);
        return $property;
    }
}