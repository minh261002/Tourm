<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
