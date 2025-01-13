<?php

namespace App\Admin\Repositories\Slider;

use App\Admin\Repositories\BaseRepositoryInterface;

interface SliderItemRepositoryInterface extends BaseRepositoryInterface
{
    public function findOrFailWithRelations($id, $relations = ['slider']);
    public function getQueryBuilderByColumns($column, $value);
    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');
}