<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('weeks')->insert([
                'week_weekdays' => Str::random(10),
                'status_check' => Str::random(10),
                'company_id' => random_int(1, 99),
                'create_at' => Str::random(10),
                'end_at' => Str::random(10),
            ]);
        }
    }
}
