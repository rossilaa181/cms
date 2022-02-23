<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return'This is a Career Program';
    }
    public function magang(){
        return'This is an internship program';
    }
    public function ki(){
        return'This is an industrial visit program';
    }    
}
