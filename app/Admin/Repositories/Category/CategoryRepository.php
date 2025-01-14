<?php

namespace App\Admin\Repositories\Category;

use App\Models\Category;
use App\Admin\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }
}