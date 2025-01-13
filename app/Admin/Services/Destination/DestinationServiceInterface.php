<?php

namespace App\Admin\Services\Destination;

use Illuminate\Http\Request;

interface DestinationServiceInterface
{
    public function store(Request $request);
    public function update(Request $request);
}
