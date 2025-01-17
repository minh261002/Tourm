<?php

namespace App\Admin\Repositories\Activity;

use App\Admin\Repositories\BaseRepositoryInterface;

interface ActivityRepositoryInterface extends BaseRepositoryInterface
{
    public function getMinPrice();

    public function getMaxPrice();
}