<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZK_Teco_devices extends Model
{
    use HasFactory;
    protected $table="zkteco_devices";

    protected $fillable = [
        "model_name",
        "ip",
        "port",
        "status",
        ];
}
