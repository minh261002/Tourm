<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'amenities';

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
