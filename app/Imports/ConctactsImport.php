<?php

namespace App\Imports;

use App\Models\Contact;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithFormatData;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ConctactsImport implements ToModel,WithBatchInserts,
        WithChunkReading
{
    /**
    * @param Collection $collection
    */
    public function model(array $contacts)

    {

            return new Contact([
                'Id' => $contacts['0'],
                'Jour' => $contacts['1'],
                'Employe' => $contacts['2'],
                'Horaire' => $contacts['3'],
                'is_archive' => $contacts['4']
            ]);

    }

    function batchSize(): int
    {
        return 2000;
    }

    function chunkSize(): int
    {
        return 2000;
    }
}
