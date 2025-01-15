<?php

namespace App\Admin\Repositories\Property;

use App\Models\Property;
use App\Admin\Repositories\BaseRepository;

class PropertyRepository extends BaseRepository implements PropertyRepositoryInterface
{
    public function getModel()
    {
        return Property::class;
    }
}