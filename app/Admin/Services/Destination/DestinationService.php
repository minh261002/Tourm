<?php

namespace App\Admin\Services\Destination;

use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use Illuminate\Http\Request;

class DestinationService implements DestinationServiceInterface
{
    protected $repository;

    public function __construct(DestinationRepositoryInterface $repository)
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
