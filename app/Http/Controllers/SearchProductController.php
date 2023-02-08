<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchProductController extends Controller
{
    public function search(){
        
        $Home2 = Product::latest();

        if(request('search')){
            $Home2->where('Name', 'like', '%' . request('search') . '%');
        }
        return view('SearchProduct',[
            "Home2" => $Home2->get()
        ]);

        return redirect('/Login');
    }
}
