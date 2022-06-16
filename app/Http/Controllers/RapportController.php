<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rapport;


class RapportController extends Controller
{
    //
    public function index()
    {
        return view('planning.rapportAssiduite')->with(['rapport' => Rapport::all()]);
    }

    function heures_faites($id_personnel,$rapport_assiduite){
        $heures_faites=0;
      for($i=0;$i<count($rapport_assiduite);$i++){
                if($rapport_assiduite[$i]->id_personnel==$id_personnel){
                  $sec=explode(":",$rapport_assiduite[$i]->heures_faites);
                  $secondes=$sec[0]*3600+$sec[1]*60+$sec[2];
                  $heures_faites+=$secondes;
                }
              }

              $heures_faites= round($heures_faites/3600,0);
              return $heures_faites;

    }

     function heures_mois($heures_heb,$date1,$date2){
         $date_debut = strtotime($date1);
         $date_fin = strtotime($date2);
         $sem=round(($date_fin - $date_debut)/60/60/24/7,0);
         return ($sem*$heures_heb);
    }

     function heures_absences($heures_faites,$heures_mois){
          return ($heures_mois-$heures_faites);
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



}
