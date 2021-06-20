<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('classes_users')->insert([
                'user_id' => random_int(1, 99),
                'class_id' => random_int(1, 99),
                'teacher_id' => random_int(1, 99),
            ]);
        }
    }
}
