<?php

namespace App\Imports;

use App\Models\Planning;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PlanningImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
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

}
