<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;

class ShowProfileController extends Controller
{
    public function showProfile($lang)
    {
        $new = Product::latest();
        App::setlocale($lang);
        return view('Profile',[
            "Prof" => User::all()
        ]);
    }

    public function showProfileAdmin($lang)
    {
        $new = Product::latest();
        App::setlocale($lang);
        return view('ProfileAdmin',[
            "Prof" => User::all()
        ]);
    }


    public function updateProfile(Request $request)
    {
        $validator = User::make($request->all(),[
            'FirstName' => 'required|max:25',
            'LastName' => 'required|max:25',
            'Role' => 'required',
            'email' => 'required|email',
            'password'=> 'required|min:5|max:255',
            'confirm-password' => 'required_with:password|same:password|min:5|',
            'gender' => 'required',
        ]);
        
        $Validatedpassword= Hash::make($validator['password']);

        $imageFile = $request->file('Photo');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        Storage::putFileAs('images',$imageFile,$imageName);
        
        DB::table('Users')->update([
            'FirstName' => $request->get('FirstName'),
            'LastName' => $request->get('LastName'),
            'Role' => $request->get('Role'),
            'email' => $request->get('email'),
            'password' => $Validatedpassword,    
        ]);
        
                // if($request->file('Photo')){
                //     $validator['Photo'] = $request->file('Photo')->store('images');
                //     }

        return redirect('/Saved');
    }
}
