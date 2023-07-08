<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'brand_id' => 'i',
            'model' => '318i',
            'license_number' => 'F FL8F JWU',
            'rate' => '200000',
            'stock' => '3',
        ]);
    }
}
