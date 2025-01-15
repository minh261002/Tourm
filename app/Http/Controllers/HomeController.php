<?php

namespace App\Http\Controllers;

use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categoryRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getByQueryBuilder([
            'status' => 'active',
            'is_home' => true
        ])->get();
        return view('client.home.index', compact('categories'));
    }
}