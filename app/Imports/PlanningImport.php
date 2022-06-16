<?php

namespace App\Imports;

use App\Models\Planning;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;



class PlanningImport implements ToModel,WithHeadingRow,WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)

    {
        $found = array(
            'Employee'=>$row['employee'],
            'id'=>$row['id']
        );

        $planning = Planning::where($found)->first();
        if ($planning== null){
            return new Planning([

                'id' => $row['id'],

                'Lundi' => $row['lundi'],

                'Mardi' =>$row['mardi'],

                'Mercredi' =>$row['mercredi'],

                'Jeudi' =>$row['jeudi'],

                'Vendredi' =>$row['vendredi'],

                'Samedi' => $row['samedi'],

                'Dimanche' =>$row['dimanche'],

                'Employee' =>$row['employee'],

            //
        ]);
        }
        else {
            $planning->update(
                [
                'id' => $row['id'],

                'Lundi' => $row['lundi'],

                'Mardi' =>$row['mardi'],

                'Mercredi' =>$row['mercredi'],

                'Jeudi' =>$row['jeudi'],

                'Vendredi' =>$row['vendredi'],

                'Samedi' => $row['samedi'],

                'Dimanche' =>$row['dimanche'],

                'Employee' =>$row['employee'],
                ]
                );
        }


    }
    public function uniqueBy()
    {
        return 'id';
    }

}
