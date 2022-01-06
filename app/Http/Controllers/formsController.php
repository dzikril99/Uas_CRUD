<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsController extends Controller
{
    public function input(){
        return view('formku.index');
    }
}
