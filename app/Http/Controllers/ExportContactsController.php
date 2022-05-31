<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactsExport;
use App\Http\Controllers\Controller;

class ExportContactsController extends Controller
{
    public function export(){
        return Excel:: download(new ContactsExport, 'contact.xlsx');
    }


    public function index(){
        return view('planning.planning');
    }

}
