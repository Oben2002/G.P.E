<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Year;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Year::factory()
            ->count(20)
            ->hasPosts(1)
            ->create();
    }
}
