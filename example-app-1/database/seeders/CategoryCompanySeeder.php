<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('categories_companies')->insert([
                'company_id' => random_int(1, 99),
                'category_id' => random_int(1, 99),
            ]);
        }
    }
}
