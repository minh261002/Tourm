<?php

namespace App\Admin\Services\Activity;

use App\Admin\Repositories\Activity\ActivityRepositoryInterface;
use Illuminate\Http\Request;

class ActivityService implements ActivityServiceInterface
{
    protected $repository;

    public function __construct(ActivityRepositoryInterface $repository)
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

        return $this->repository->create($data);
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

        return $this->repository->update($data['id'], $data);
    }
}