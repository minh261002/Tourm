<?php

namespace App\Admin\Repositories\Destination;

use App\Admin\Repositories\BaseRepositoryInterface;

interface DestinationRepositoryInterface extends BaseRepositoryInterface
{
    public function search($keyword);
}
