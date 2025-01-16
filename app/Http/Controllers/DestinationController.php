<?php

namespace App\Http\Controllers;

use App\Admin\Repositories\Destination\DestinationRepositoryInterface;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    protected $repository;

    public function __construct(DestinationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $keyword = request()->get('query');
        if ($keyword) {
            $destinations = $this->repository->search($keyword);
        } else {
            $destinations = $this->repository->getByQueryBuilder([
                'status' => 'active',
            ])->paginate(9);
        }

        return view('client.destination.index', compact('destinations'));
    }

    public function show($slug)
    {
        $destination = $this->repository->getByQueryBuilder([
            'slug' => $slug,
        ])->firstOrFail();

        return view('client.destination.show', compact('destination'));
    }
}