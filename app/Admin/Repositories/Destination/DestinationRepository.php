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

    public function search($keyword)
    {
        $keyword = strtolower($keyword);
        return $this->model->where('name', 'like', "%$keyword%")->paginate(9);
    }
}
