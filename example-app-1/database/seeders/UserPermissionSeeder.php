<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('users_permissions')->insert([
                'user_id' => random_int(1, 99),
                'permission_id' => random_int(1, 99),
            ]);
        }
    }
}
