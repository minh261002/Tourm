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

        $destinations = $data['destination_ids'];
        unset($data['destination_ids']);

        $activity = $this->repository->create($data);
        $activity->destinations()->sync($destinations);

        return $activity;
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

        $destinations = $data['destination_ids'];
        unset($data['destination_ids']);

        $activity = $this->repository->find($data['id']);
        $activity->destinations()->sync($destinations);

        return $activity->update($data);
    }
}
