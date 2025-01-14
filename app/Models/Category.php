<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'category_activity', 'category_id', 'activity_id');
    }
}
