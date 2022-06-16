<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rapport;


class Personnel extends Model
{
    use HasFactory;
    protected $table="personnels";

    public function rapport()
    {
        return $this->hasMany(Rapport::class);
    }

    public function planning()
    {
        return $this->belongsToMany('App\Models\Planning', 'planning_employees', 'emp_id', 'planning_id');
    }
}
