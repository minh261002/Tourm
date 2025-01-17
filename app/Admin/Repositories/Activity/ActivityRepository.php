<?php

namespace App\Admin\Repositories\Activity;

use App\Models\Activity;
use App\Admin\Repositories\BaseRepository;

class ActivityRepository extends BaseRepository implements ActivityRepositoryInterface
{
    public function getModel()
    {
        return Activity::class;
    }

    public function getMinPrice()
    {
        return $this->model->min('price');
    }

    public function getMaxPrice()
    {
        return $this->model->max('price');
    }
}