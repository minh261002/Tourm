<?php

namespace App\Admin\Repositories\Destination;

use App\Models\Destination;
use App\Admin\Repositories\BaseRepository;

class DestinationRepository extends BaseRepository implements DestinationRepositoryInterface
{
    public function getModel()
    {
        return Destination::class;
    }
}