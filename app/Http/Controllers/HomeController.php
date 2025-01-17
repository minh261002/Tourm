<?php

namespace App\Http\Controllers;

use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use App\Admin\Repositories\Property\PropertyRepositoryInterface;
use App\Admin\Repositories\Slider\SliderRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categoryRepository;
    protected $destinationRepository;
    protected $propertyRepository;
    protected $sliderRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        DestinationRepositoryInterface $destinationRepository,
        PropertyRepositoryInterface $propertyRepository,
        SliderRepositoryInterface $sliderRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->destinationRepository = $destinationRepository;
        $this->propertyRepository = $propertyRepository;
        $this->sliderRepository = $sliderRepository;
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
        $properties = $this->propertyRepository->getByQueryBuilder([
            'status' => 'active',
        ])->orderBy('id', 'desc')->limit(6)->get();
        $slider = $this->sliderRepository->getByQueryBuilder([
            'status' => 'active',
            'key' => 'home_slider'
        ], ['items'])->first();

        return view('client.home.index', compact('categories', 'destinations', 'properties', 'slider'));
    }

    public function about()
    {
        return view('client.pages.about');
    }

    public function contact()
    {
        return view('client.pages.contact');
    }
}