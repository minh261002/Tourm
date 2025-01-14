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

    public function destination()
    {
        return $this->hasMany(Destination::class, 'activity_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_activity', 'activity_id', 'category_id');
    }

    public function dates()
    {
        return $this->hasMany(ActivityDate::class, 'activity_id');
    }
}