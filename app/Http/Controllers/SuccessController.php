<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SuccessController extends Controller
{
    
    public function index($lang){
        App::setlocale($lang);
        return view('Success');
    }
}
