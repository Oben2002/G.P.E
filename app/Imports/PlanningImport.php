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

                'jour'    => $row['jour'],
                'horaire' => $row['horaire'],
                'employee' => $row['employee'],

            //
        ]);
    }

}
