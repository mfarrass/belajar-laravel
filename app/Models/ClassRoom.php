<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    // protected disini untuk membaca nama database yg ada diphpmyadmin. kalo gk pake protected bakal ngebaca ClassRoom diatas
    protected $table = 'class';
}


// https://laravel.com/docs/9.x/seeding