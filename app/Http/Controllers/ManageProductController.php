<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;

class ManageProductController extends Controller
{
    public function index($lang)
    {
        App::setlocale($lang);
        $Home2 = Product::latest();

        if(request('search')){
            $Home2->where('Name', 'like', '%' . request('search') . '%');
        }
        return view('ManageProduct',[
            "Manage" => Product::all()
        ]);
    }

    public function destroy($id)
    {
        DB::table('Products')->where('id','like',$id)->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $item = DB::table('Products')->where('id','like',$id)->get();
        return view('UpdateProduct',[
            'Product' => $item,
            'item' => $item
    ]);

    }

    public function update(Request $request, $id)
    {
        $validator = Product::make($request->all(),[
            'Name' => 'required|max:255',
            'Category' => 'required',
            'Detail' => 'required|max:255',
            'Price' => 'required',
            'Photo' => 'required|file|max:4028|mimes:jpeg,jpg,png'
        ]);

        

        if($request->file('Photo')){
            $validator['Photo'] = $request->file('Photo')->store('images');
            }

        $imageFile = $request->file('Photo');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        Storage::putFileAs('images',$imageFile,$imageName);

        
        DB::table('Products')->where('id','like',$id)->update([
            'Name' => $request->get('Name'),
            'Category' => $request->get('Category'),
            'Detail' => $request->get('Detail'),    
            'Price' => $request->get('Price'),
            'Photo' => ("images/".$imageName),
        ]);
        
                // if($request->file('Photo')){
                //     $validator['Photo'] = $request->file('Photo')->store('images');
                //     }

        return redirect('/Home/{lang}');
    }
}
