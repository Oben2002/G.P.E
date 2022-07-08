<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ZkTeco_devices extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "model_name",
        "ip",
        "port",
        "status",
        "serialNumber",
    ];
}
