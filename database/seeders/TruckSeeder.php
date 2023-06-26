<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'unit_number'   =>  'A1578',
            'year'          =>  '2000',
            'note'         =>  'Note'
        ]);
        $truck = Truck::create([
            'unit_number'   =>  '8050',
            'year'          =>  '2001',
        ]);
        $truck = Truck::create([
            'unit_number'   =>  'A1578',
            'year'          =>  '1901',
        ]);
        $truck = Truck::create([
            'unit_number'   =>  'A1578',
            'year'          =>  '2025',
            'note'         =>  'Note'
        ]);
    }
}
//        $table->id();
//             $table->timestamps();
//             $table->String('unit_number',255);
//             $table->unsignedInteger('year');
//             $table->String('notes');