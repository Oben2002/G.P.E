<?php

namespace App\Http\Controllers;
use App\Models\Personnel;
use App\Models\Zk_Teco_devices;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data=[
            'personnel' => Personnel::count(),
            'user' => User::count(),
            'FingerDevices' => Zk_Teco_devices::count()
            ];
        return view('pages.dashboard',compact('data'));
    }
}
