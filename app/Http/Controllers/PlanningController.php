<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PlanningImport;
use App\Exports\PlanningExport;
use App\Models\Planning;


class PlanningController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport(Planning $model)
    {
       return view('planning.file-import', ['planning' => $model->paginate(15)]);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request)
    {
        Excel::import(new PlanningImport, $request->file('file')->store('temp'));
        return back()->with(['status' => 'Planning imported successfully.']);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new PlanningExport, 'planning.xlsx');
    }

    public function totalHours(Planning $planning){
        $sum= Hours($planning->Lundi)+Hours($planning->Mardi)+Hours($planning->Mercredi)+Hours($planning->Jeudi)+Hours($planning->Vendredi)+Hours($planning->Samedi)+Hours($planning->Dimanche);

        return $sum;
    }
    public function Hours(int $jour){
        if ($jour==0){
            $hours=9;
        }
        elseif($jour= 1){
            $hours=6;
        }
        elseif($jour=2){
            $hours=6.5;
        }
        elseif($jours=3){
            $hours=6;
        }
        else {
            $hours=0;
        }
        return $hours;

    }
    //


}
