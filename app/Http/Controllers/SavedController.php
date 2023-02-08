<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SavedController extends Controller
{
    public function index($lang){
        App::setlocale($lang);
        return view('Saved');
    }
}
