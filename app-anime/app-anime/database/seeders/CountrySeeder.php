<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Countries::create([
                'name' => 'Japan',
            ]);
            Countries::create([
                'name' => 'United States',
            ]);
            Countries::create([
                'name' => 'United Kingdom',
            ]);
            Countries::create([
                'name' => 'Canada',
            ]);
            Countries::create([
                'name' => 'Australia',
            ]);
            Countries::create([
                'name' => 'India',
            ]);
            Countries::create([
                'name' => 'France',
            ]);
            Countries::create([
                'name' => 'Germany',
            ]);
            Countries::create([
                'name' => 'Italy',
            ]);
            Countries::create([
                'name' => 'Spain',
            ]);
            Countries::create([
                'name' => 'Brazil',
            ]);
            Countries::create([
                'name' => 'Mexico',
            ]);
            Countries::create([
                'name' => 'Argentina',
            ]);
            Countries::create([
                'name' => 'Philippines',
            ]);
            Countries::create([
                'name' => 'Indonesia',
            ]);
            Countries::create([
                'name' => 'Malaysia',
            ]);
            Countries::create([
                'name' => 'Singapore',
            ]);
            Countries::create([
                'name' => 'Thailand',
            ]);
            Countries::create([
                'name' => 'Vietnam',
            ]);
            Countries::create([
                'name' => 'South Korea',
            ]);
            Countries::create([
                'name' => 'China',
            ]);
            Countries::create([
                'name' => 'Hong Kong',
            ]);
            Countries::create([
                'name' => 'Taiwan',
            ]);
            Countries::create([
                'name' => 'Russia',
            ]);
            
    }
}
