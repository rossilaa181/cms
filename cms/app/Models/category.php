<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public static function index() {
        return category::all();
    }

    public static function count() {
        return category::all()->count();
    }
}
