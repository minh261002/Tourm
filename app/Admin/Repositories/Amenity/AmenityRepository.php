<?php

namespace App\Admin\Repositories\Amenity;

use App\Models\Amenity;
use App\Admin\Repositories\BaseRepository;

class AmenityRepository extends BaseRepository implements AmenityRepositoryInterface
{
    public function getModel()
    {
        return Amenity::class;
    }
}