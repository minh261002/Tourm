<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityDate extends Model
{
    protected $table = 'activity_dates';

    protected $guarded = [];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}