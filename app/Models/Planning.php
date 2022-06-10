<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;
    protected $table="plannings";
    protected $fillable = [
            "Lundi",

            "Mardi",

            "Mercredi",

            "Jeudi",

            "Vendredi",

            "Samedi",

            "Dimanche",

            "Employee",
    ];
}
