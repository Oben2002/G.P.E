<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    //
    public function addPersonnel(){
        return view('users.add-personnel');
    }

    public function createPersonnel(Request $request){
        $personnel = new Personnel();
        $personnel->name=$request->name;
        $personnel->role=$request->role;
        $personnel->idB=$request->IdB;
        $personnel->save();
        return back()->with('personnel_created', 'Personnel has been created successfully' );


    }

    public function index(Personnel $model)
    {
        return view('users.index', ['personnel' => $model->paginate(15)]);
    }
}
