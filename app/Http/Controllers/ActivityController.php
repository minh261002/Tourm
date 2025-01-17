<?php

namespace App\Http\Controllers;

use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Admin\Repositories\Activity\ActivityRepositoryInterface;

class ActivityController extends Controller
{
    protected $repository;
    protected $categoryRepository;

    public function __construct(
        ActivityRepositoryInterface $repository,
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $keyword = request()->input('query');
        $category = request()->input('category');
        $min_price = request()->input('min_price');
        $max_price = request()->input('max_price');

        $query = $this->repository->getByQueryBuilder([
            'status' => 'active'
        ]);

        if ($keyword) {
            $query->where('name', 'like', "%$keyword%");
        }

        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        if ($min_price && $max_price) {
            $query->whereBetween('price', [$min_price, $max_price]);
        }

        $activities = $query->paginate(9);

        $categories = $this->categoryRepository->getByQueryBuilder([
            'status' => 'active'
        ])->get();

        $minPrice = $this->repository->getMinPrice();
        $maxPrice = $this->repository->getMaxPrice();

        return view('client.activity.index', compact('activities', 'categories', 'minPrice', 'maxPrice'));
    }

    public function show($slug)
    {
        dd($slug);
    }
}
