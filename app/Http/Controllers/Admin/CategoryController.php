<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $data['cats'] = Cat::all();
        return view('Admin.Cats.CatHome')->with($data);
        // return redirect()->route('');
        // return back();
        // return response()->json([]);
    }

    public function add_cat(Request $request)
    {
        $data = $request->validate([
            'name_en' => "required|max:200",
            'name_ar' => "required|max:200",
            'desc_en' => "nullable",
            'desc_ar' => "nullable",
            'img' => "nullable|image|mimes:png,jpg,jpeg"
        ]);

        if($request->hasFile('img')){
            $image = time().'cat.'.$request->img->getClientOriginalExtension();
            $request->img->move(public_path('upload/cats'),$image);
            $data['img'] = $image;
        }
        Cat::create($data);
        return back();
    }
}
