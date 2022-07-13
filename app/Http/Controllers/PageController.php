<?php

namespace App\Http\Controllers;
use Redirect,Response;
Use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\ZK_Teco_devices;
use App\Models\User;


class PageController extends Controller
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
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
      /*   $record = Personnel::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();

     $datas = [];

     foreach($record as $row) {
        $datas['label'][] = $row->day_name;
        $datas['data'][] = (int) $row->count;
      }

    $datas['chart_data'] = json_encode($datas); */


        $data=[
        'personnel' => Personnel::count(),
        'user' => User::count(),
        'FingerDevices' => ZK_Teco_devices::count(),

        ];
        if (view()->exists("pages.{$page}")) {

            return view("pages.{$page}")->with('data', $data);
        }

        return abort(404);
    }
}
