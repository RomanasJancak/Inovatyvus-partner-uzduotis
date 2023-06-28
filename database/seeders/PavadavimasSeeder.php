<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pavadavimas;

class PavadavimasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pavadavimas = Pavadavimas::create([
        'truck_id'    =>  1,
        'subUnit'       =>  2,
        'start_date'    =>  date(DATE_ATOM, mktime(0, 0, 0, 6, 26, 2023)),
        'end_date'      =>  date(DATE_ATOM, mktime(0, 0, 0, 7, 26, 2023)),
        ]);
        $pavadavimas = Pavadavimas::create([
            'truck_id'    =>  1,
            'subUnit'       =>  3,
            'start_date'    =>  date(DATE_ATOM, mktime(0, 0, 0, 7, 26, 2023)),
            'end_date'      =>  date(DATE_ATOM, mktime(0, 0, 0, 8, 26, 2023)),
        ]);
        $pavadavimas = Pavadavimas::create([
            'truck_id'    =>  4,
            'subUnit'       =>  5,
            'start_date'    =>  date(DATE_ATOM, mktime(0, 0, 0, 4, 26, 2023)),
            'end_date'      =>  date(DATE_ATOM, mktime(0, 0, 0, 5, 26, 2023)),
        ]);
        $pavadavimas = Pavadavimas::create([
            'truck_id'    =>  1,
            'subUnit'       =>  5,
            'start_date'    =>  date(DATE_ATOM, mktime(0, 0, 0, 7, 26, 2023)),
            'end_date'      =>  date(DATE_ATOM, mktime(0, 0, 0, 8, 26, 2023)),
        ]);
    }
}
