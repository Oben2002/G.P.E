<?php

namespace App\Models;
use App\Models\Personnel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    protected $table = 'rapports';

    public function personnel()
    {
        return $this->belongsTo(Personnel::class,'emp_id');
    }
}
