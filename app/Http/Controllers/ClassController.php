<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    // fungsi index yg nantinya akan dipanggil pada web.php
       public function index()
    {
        $class = ClassRoom::all();
        // classroom = namafile
        return view('classroom', ['classList' => $class]);
    }
}
