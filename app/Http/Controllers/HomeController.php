<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;


class HomeController extends Controller
{



    public function ShowProduct($lang)
    {
        $new = Product::latest();
        App::setlocale($lang);
        if(request('search')){
            $new->where('Name', 'like', '%' . request('search') . '%');
        }
        return view('Home',[
                "Home2" => DB::table('products')->paginate(3),
                
        ]);


    }

    public function ShowProductUser($lang)
    {
        $new = Product::latest();
        App::setlocale($lang);
        if(request('search')){
            $new->where('Name', 'like', '%' . request('search') . '%');
        }
        return view('HomeUser',[
                "Home2" => DB::table('products')->paginate(3),
        ]);
    }


    public function ShowDetailCustomer(Product $Number){
        return view('ProductDetailCustomer',[
            "Detail" => $Number
        ]);
    }

    public function ShowDetailAdmin(Product $Number){
        return view('ProductDetailAdmin',[
            "Detail" => $Number
        ]);
    }

    
}
