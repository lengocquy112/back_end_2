<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CompanySeeder extends Seeder
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
            DB::table('companies')->insert([
                'company_name' => Str::random(3),
                'company_web' => Str::random(3),
                'company_address' => Str::random(3),
                'company_code' => Str::random(3),
                'company_phone' => "012345679",
                'category_id' => $collection->random(),
            ]);
        }
    }
}