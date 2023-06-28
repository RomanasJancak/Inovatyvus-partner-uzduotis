<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Truck;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $truck = Truck::create([
            'unit_number'   =>  'A1578_1',
            'year'          =>  '2000',
            'note'         =>  'Note'
        ]);
        $truck = Truck::create([
            'unit_number'   =>  '8050_2',
            'year'          =>  '2001',
        ]);
        $truck = Truck::create([
            'unit_number'   =>  'A1578_3',
            'year'          =>  '1901',
        ]);
        $truck = Truck::create([
            'unit_number'   =>  'A1578_4',
            'year'          =>  '2025',
            'note'         =>  'Note'
        ]);
        $truck = Truck::create([
            'unit_number'   =>  'A1578_5',
            'year'          =>  '2025',
            'note'         =>  'Note'
        ]);
        $truck = Truck::create([
            'unit_number'   =>  'A1578_6',
            'year'          =>  '2025',
            'note'         =>  'Note'
        ]);
        $truck = Truck::create([
            'unit_number'   =>  'A1578_7',
            'year'          =>  '2025',
            'note'         =>  'Note'
        ]);
    }
}
