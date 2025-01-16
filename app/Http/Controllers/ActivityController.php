<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Repositories\Activity\ActivityRepositoryInterface;

class ActivityController extends Controller
{
    protected $repository;

    public function __construct(
        ActivityRepositoryInterface $repository
    ) {
        $this->repository = $repository;
    }

    public function index()
    {
        $activities = $this->repository->getByQueryBuilder([
            'status' => 'active'
        ])->paginate(9);

        return view('client.activity.index', compact('activities'));
    }

    public function show($slug)
    {
        dd($slug);
    }
}