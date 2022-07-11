<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZkTeco_devices extends Model
{
    use HasFactory;
    protected $table="zk_teco_devices";

    protected $fillable = [
    "model_name",
    "ip",
    "port",
    "status",
    ];
}
