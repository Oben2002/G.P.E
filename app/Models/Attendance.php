<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personnel;



class Attendance extends Model
{
    use HasFactory;

    protected $table = 'in_out_logs';


    public function personnel()
    {
        return $this->belongsTo(Personnel::class,'id');
    }


}
