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
    //
}
