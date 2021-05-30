<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){
            DB::table('trainers')->insert([
                'trainer_name' => 'lam',
                'company_id' => rand(1,1000000),
                'trainer_email' => Str::random(20),
                'trainer_phone' => '123456',
            ]);
        }
    }
}
