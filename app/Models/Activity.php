<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'activities';

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}