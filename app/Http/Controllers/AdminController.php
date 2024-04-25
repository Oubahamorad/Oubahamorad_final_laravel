<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $admins = Admin::all();
        return view('admin',compact( 'admins')) ;
    }
    public function store(Request $request)
    {


//   dd($request);   
        request()->validate([
            "name" => "required",
            "image" => "required|mimes:png,jpg,webp|max:2048",
        ]);
   
        $image = $request->file("image");
        $imageName = time() . "_" . $image->getClientOriginalName();
        $image->storeAs("public/image", $imageName);
     

        Admin::create([
            "name" => $request->name,
            'image'=>$imageName,
           

        ]);

        // we redirect the user to specefic page 

        return redirect()->back();
    }
}
