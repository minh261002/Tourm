<?php

namespace App\Admin\Repositories\Slider;

use App\Admin\Repositories\BaseRepositoryInterface;

interface SliderRepositoryInterface extends BaseRepositoryInterface
{
    public function getQueryBuilderWithRelations(array $relations = ['items']);

    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');
}
