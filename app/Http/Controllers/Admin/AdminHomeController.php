<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $data = Cat::latest()->take(3)->get();
        $dataAll = Cat::get()->take(12);
        $cat_data = Cat::count();
        $acc_data = User::count();
        $post_data = User::count();
        return view('Admin.AdminHome')->with(['cats' => $data, 'cats_all' => $dataAll , 'page_data' => $cat_data , 'acc_data' => $acc_data , 'post_data' => $post_data]);
    }
}
