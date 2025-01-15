<?php

namespace App\Admin\Services\Property;

use Illuminate\Http\Request;

interface PropertyServiceInterface
{
    public function store(Request $request);
    public function update(Request $request);
}