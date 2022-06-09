<?php

namespace App\Http\Controllers;

use App\Imports\ConctactsImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Helpers\FileTypeDetector;
use Illuminate\Support\Facades\DB;


class ImportContactsController extends Controller
{
    public function showForm(){
        // $data = DB::table('contacts')->orderBy('Id', 'DESC')
        // ->get();
        return view('planning.planning');
    }

    public function import(Request $request){
        $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls,csv',
        ]);
        $path = $request->file('file');

        Excel::import(new ConctactsImport,$path);
        return 'successful';
    }

}
