<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;

class UpdateRoleController extends Controller
{
    public function showRole($id)
    {
        $item = DB::table('Users')->where('id','like',$id)->get();
        return view('UpdateRole',[
            'Prof' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = User::make($request->all(),[
            'Role' => 'required',
        ]);
        
        DB::table('Users')->where('id','like',$id)->update([
            'Role' => $request->get('Role'),
        ]);

        return redirect('/AccountMaintenance');
    }

}
