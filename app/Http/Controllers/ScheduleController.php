<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Requests\ScheduleEmp;

class ScheduleController extends Controller
{
    //
     public function index()
    {

        return view('personnel.schedule')->with('Schedules', Schedule::all());


    }


    public function stores(ScheduleEmp $request)
    {
        $request->validated();

        $schedule = new Schedule;
        $schedule->slug = $request->slug;
        $schedule->time_in = $request->time_in;
        $schedule->time_out = $request->time_out;
        $schedule->save();
        return back()->with('schedule_created', 'Schedule has been created successfully' );


    }

    public function update(ScheduleEmp $request, Schedule $schedule)
    {
        $request['time_in'] = str_split($request->time_in, 5)[0];
        $request['time_out'] = str_split($request->time_out, 5)[0];

        $request->validated();

        $schedule->slug = $request->slug;
        $schedule->time_in = $request->time_in;
        $schedule->time_out = $request->time_out;
        $schedule->save();
        return back()->with('schedule_updated', 'Schedule has been updated successfully' );



    }


    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return back()->with('schedule_deleted', 'Schedule has been deleted successfully' );

    }
}
