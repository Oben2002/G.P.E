<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiometricDeviceController extends Controller
{
    //
    public function index()
    {
        $devices = FingerDevices::all();

        return view('connexion.enroll', compact('devices'));
    }
    
}
