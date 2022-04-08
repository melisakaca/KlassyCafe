<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function user(){

        $users=User::all();
        return view('admin.user', compact('users'));
    }
    public function deleteuser($id){
        $users=User::find($id);
        $users->delete();
        return redirect()->back();

    }
    public function foodmenu(){

        $users=User::all();
        return view('admin.foodmenu');
    }
    public function upload(Request $request){

   $data= new Food();


   $imagename=time().'.'.$request->name.'.'.$request->image->extension();
   $request->image->move('image',$imagename);


   $data->title->$request->title;
   $data->price->$request->price;
   $data->description->$request->description;
   $data->save();
   return redirect()->back();


    }
}
