<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('courses')->insert([
                'course_name' => Str::random(10),
                'course_semester' => Str::random(10),
                'course_year' => random_int(1, 99),
            ]);
        }
    }
}
