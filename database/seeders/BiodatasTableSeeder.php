<?php

namespace Database\Seeders;
use App\Models\Biodata;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Biodata::create(['fname'=>'Peter', 'lname'=>'Azi']);
        Biodata::create(['fname'=>'Dorcas', 'lname'=>'Gemu']);
        Biodata::create(['fname'=>'Godwin', 'lname'=>'Peters']);
    }
}
