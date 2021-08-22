<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\FoodChef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = Food::all();
        $data2 = Chef::all();

        return view('home', compact('data', 'data2'));
    }

    // Admin Page
    public function redirects()
    {
        $data = Food::all();
        $data2 = Chef::all();
        $userType = Auth::user()->usertype;

        if($userType == '1')
        {
            return view('admin.admin');
        }
        else {
            return view('home', compact('data', 'data2'));
        }
    }

    // Add Cart In Home Page
    public function addCart()
    {
        // Get User ID

        if(Auth::id())
        {
            $user_id = Auth::id();
            dd($user_id);
            return redirect()->back();
        }
        else {
            return redirect('/login');
        }
    }
}
