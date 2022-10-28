<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Posts;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{

    public function index()
    {
        $data = Posts::latest()->get();
        return view('Front.FrontHome')->with('posts', $data);
    }


    public function show($id)
    {
        Posts::findOrFail($id)->increment('views');
        
        $likes_data = Like::where('likeable_id', $id)->count();


        return view('Front.SinglePost', [
            'post' => Posts::findOrFail($id),
            'likes' => $likes_data
        ]);
    }



    public function add_post(Request $request)
    {
        $data = $request->validate([
            'name' => "required|max:200",
            'description' => "required",
            'image' => "required|image|mimes:png,jpg,jpeg",
            'post_to_cat' => "required"
        ]);

        if ($request->hasFile('image')) {
            $image = time() . 'cat.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/posts'), $image);
            $data['image'] = $image;
        }
        Posts::create($data);
        return back();
    }
}
