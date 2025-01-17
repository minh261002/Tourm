<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';

    protected $guarded = [];


    public function province()
    {
        return $this->belongsTo(Province::class, 'parent_code', 'code');
    }

    public function wards()
    {
        return $this->hasMany(Ward::class, 'parent_code', 'code');
    }
}
