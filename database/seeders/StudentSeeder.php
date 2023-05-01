<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // tutor menggunakan seeder yaitu untuk mengisi database
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Aiu', 'gender' => 'P', 'nis' => '0101001', 'class_id' => 2],
        //     ['name' => 'Budi', 'gender' => 'L', 'nis' => '0101002', 'class_id' => 2],
        //     ['name' => 'Badrun', 'gender' => 'L', 'nis' => '0101003', 'class_id' => 1],
        //     ['name' => 'Clasita', 'gender' => 'P', 'nis' => '0101004', 'class_id' => 3],
        // ];


        // foreach ($data as $value) {
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        // Memanggil Factory sebanyak 1
        Student::factory()->create();

        // Memanggil Factory data dummy sebanyak 20 data
        Student::factory()->count(20)->create();
    }
}


// https://laravel.com/docs/9.x/seeding