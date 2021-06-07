<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('diaries')->insert([
                'diary_name' => Str::random(10),
                'user_id' => random_int(1, 99),
            ]);
        }
    }
}
