<?php

namespace App\Admin\Repositories\Post;
use App\Models\PostCatalogue;
use App\Admin\Repositories\BaseRepository;

class PostCatalogueRepository extends BaseRepository implements PostCatalogueRepositoryInterface
{
    protected $select = [];

    public function getModel()
    {
        return PostCatalogue::class;
    }
    public function getFlatTreeNotInNode(array $nodeId)
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->whereNotIn('id', $nodeId)
            ->defaultOrder()
            ->withDepth()
            ->get()
            ->toFlatTree();
        return $this->instance;
    }

    public function getFlatTree()
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->withDepth()
            ->where('status', '!=', 'inactive')
            ->get()
            ->toFlatTree();
        return $this->instance;
    }

    public function getFlatTreeBuilder()
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->where('status', '!=', 'inactive');
        $this->instance = $this->instance->withDepth();
        return $this->instance;
    }

    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC')
    {
        $this->getQueryBuilder();
        $this->instance = $this->instance->orderBy($column, $sort);
        return $this->instance;
    }
}