<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {

        // $student = Student::all();
        // return view('student', ['studentList' => $student]);

        // Get Data 
        // Query Builder
        // $student = DB::table('students')->get();
        // dd($student);

        // Eloquent
        // $student = Student::all();
        //  dd($student);

        ////////////////////////////////////////////////////////////////////////////////

        // Create Data
        // Query Builder
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '0201021',
        //     'class_id' => 1
        // ]);

        // Eloquent
        // Student::create([
        //     'name' => 'eloquent',
        //     'gender' => 'P',
        //     'nis' => '0201023',
        //     'class_id' => 1
        // ]);

        ////////////////////////////////////////////////////////////////////////////////

        // Update Data
        // Query Builder
        // DB::table('students')
        //         ->where('id', 28)
        //         ->update(['name' => 'Eloquent 2', 'class_id' => 3 ]);

        // Eloquent
        // Student::find(27)->update([
        //     'name' => 'Query Builder 2',
        //     'class_id' => 4
        // ]);

        
        ////////////////////////////////////////////////////////////////////////////////

        // Delete Data
        // Query Builder
        // DB::table('students')->where('id', 27)->delete();


        // Eloquent
        // Student::find(28)->delete();

    }
}
