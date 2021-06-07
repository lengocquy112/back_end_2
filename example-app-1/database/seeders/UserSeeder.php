<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'user_name' => Str::random(10),
                'type_id' => random_int(1, 99),
                'group_id' => random_int(1, 99),
            ]);
        }
    }
}
