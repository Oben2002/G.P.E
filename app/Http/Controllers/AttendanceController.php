<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Attendance;
use Laradevsbd\Zkteco\Http\Library\ZktecoLib;
use ZKLibrary;



class AttendanceController extends Controller
{
    //
    public function index()
    {

        return view('attendance.index')->with(['attendances' => Attendance::all()]);
    }

    public function addAttendance()
    {
        $zk = new ZktecoLib('192.168.8.103',4370);
        if ($zk->connect()){
            $attend = new Attendance();
            $attend = $zk->getAttendance();
            $attend->save();
        }

        return back();
    }

}
