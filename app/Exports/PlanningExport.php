<?php

namespace App\Exports;

use App\Models\Planning;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;



class PlanningExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Planning::all();
    }

    public function headings(): array

    {

        return [

            'id',

            'Lundi',

            'Mardi',

            'Mercredi',

            'Jeudi',

            'Vendredi',

            'Samedi',

            'Dimanche',

            'Employee',

            'Creation Date',

            'Updated Date',

        ];

    }

}
