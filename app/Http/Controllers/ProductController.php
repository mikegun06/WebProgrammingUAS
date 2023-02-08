<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    public function index($lang)
    {
        App::setlocale($lang);
        return view('AddProduct',[

        ]);
    }   

    public function NewProduct(Request $request)
    {
        
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
            'Category' => 'required',
            'Detail' => 'required|max:255',
            'Price' => 'required',
            'Photo' => 'required|file|max:4028|mimes:jpeg,jpg,png'
        ]);
        
        if($request->file('Photo')){
            $validatedData['Photo'] = $request->file('Photo')->store('images');
            }

            // $request->session()->flash('Success','Check your products!' );
            Product::create($validatedData);
            return redirect('/Home/{lang}');

        }
}
