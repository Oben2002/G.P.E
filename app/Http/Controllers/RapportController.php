<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personnel;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PlanningController;
use PDF;


class RapportController extends Controller
{
    //
    public function index()
    {
        return view('planning.rapportAssiduite')->with(['personnel' => Personnel::all()]);
    }
    public function rapportOnly()
    {
        return view('planning.rapport')->with(['personnel' => Personnel::all()]);
    }


    public function createPDF() {
        // retreive all records from db
        $data = Personnel::all();
        // share data to view
        view()->share('personnel',$data);
        $pdf = PDF::loadView('planning.rapport', compact('data'))
            ->setOptions([
                "defaultFont" => "Courier",
                "defaultPaperSize" => "a4",
                "dpi" => 130,
                "isHtml5ParserEnabled" => true,
                "isRemoteEnabled" => true
            ]);
          //store in directory storage
          Storage::disk('public')->put('rapport.pdf', $pdf->output());
          // download PDF file with download method
          return Storage::disk('public')->download("rapport.pdf");
      }

    function heures_faites(Planning $planning){
        $heures_faites= totalHours($planning);
        return $heures_faites;
    }
     function heures_mois(int $sum){
         return $heures_mois= $sum*4;
    }

     function heures_absences($heures_faites,$heures_mois){
        $heures_absences=$heures_mois-$heures_faites;
          return $heures_absences;
    }

     function tauxAssiduite($heures_faites,$heures_mois){
      return (($heures_faites/$heures_mois)*100);
    }

     function freq_mois($freq_due_heb,$date1,$date2){
      $date_debut = strtotime($date1);
      $date_fin = strtotime($date2);
      $sem=round(($date_fin - $date_debut)/60/60/24/7,0);
      return ($sem*$freq_due_heb);
    }

     function freq_faites($id_personnel,$rapport_assiduite,$heures_dues){
      $freq=0;
      for($i=0;$i<count($rapport_assiduite);$i++){
                if($rapport_assiduite[$i]->id_personnel==$id_personnel){
                    $tab=explode(":",$rapport_assiduite[$i]->heures_faites);
                    $heures=$tab[0]+$tab[1]/60+$tab[2]/360;
                  if($heures>=$heures_dues) $freq+=1;
                }
              }
      return $freq;
    }

     function freq_Nfaites($freq_faite,$id_personnel,$rapport_assiduite){
      for($i=0;$i<count($rapport_assiduite);$i++){
                if($rapport_assiduite[$i]->id_personnel==$id_personnel){
                  $freq_Nfaite=$rapport_assiduite[$i]->freq_due_heb-$freq_faite;
                  break;
                }
              }
      return $freq_Nfaite;
    }

     function tauxPonctualite($freq_faite,$freq_mois){
      return (($freq_faite/$freq_mois)*100);
    }

    public function createRapport(Request $request){
        $rapport = new Rapport();
        $rapport->heures_faites=$request->name;
        $rapport->heures_absences=$request->role;

        $rapport->save();
        return back()->with('rapport_created', 'Rapport has been created successfully' );


    }

}
