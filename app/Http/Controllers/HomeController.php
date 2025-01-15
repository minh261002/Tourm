<?php

namespace App\Http\Controllers;

use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categoryRepository;
    protected $destinationRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        DestinationRepositoryInterface $destinationRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->destinationRepository = $destinationRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getByQueryBuilder([
            'status' => 'active',
            'is_home' => true
        ])->get();
        $destinations = $this->destinationRepository->getByQueryBuilder([
            'status' => 'active',
            'is_home' => true
        ])->get();
        return view('client.home.index', compact('categories', 'destinations'));
    }
}