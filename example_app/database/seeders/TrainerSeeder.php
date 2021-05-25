<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = collect([1, 2, 3]);
        for ($i=0; $i < 500; $i++) { 
            DB::table('trainers')->insert([
                'trainer_name' => Str::random(3),
                'company_id' => $collection->random(),
                'trainer_email' => Str::random(3),
                'trainer_phone' => "012345679",
            ]);
        }
    }
}