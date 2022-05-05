<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function personnels()
    {
        return $this->belongsToMany('App\Models\Personnel', 'schedule_personnel', 'schedule_id', 'emp_id');
    }
}
