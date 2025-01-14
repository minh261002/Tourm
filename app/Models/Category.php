<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'categories';

    protected $guarded = [];

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'category_activity', 'category_id', 'activity_id');
    }
}