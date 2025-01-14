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
}