<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**    User Page    */

    // Fetch Data
    public function users()
    {
        $data = User::all();
        return view('admin.user', compact('data'));
    }

    // Delete Data
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    /**         Food Page               */

    // Food page
    public function foodmenu()
    {
        $data = Food::all();
        return view('admin.foodmenu', compact('data'));
    }

    // Delete From FoodMenu
    public function delmenu($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back()->with('status', 'Deleted Order Successfully');
    }

    // Form In FoodMenu Page
    public function upload(Request $request)
    {
        $data = new Food;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;

        $data->title = $request->input('title');
        $data->price = $request->input('price');
        $data->description = $request->input('description');

        $data->save();

        return redirect()->back()->with('status', 'Order Added Successfully');

    }

    // Edit Page
    public function edit($id)
    {
        $data = Food::find($id);
        return view('admin.edit', compact('data'));
    }

    // Update Page
    public function update(Request $request, $id)
    {
        $data = Food::find($id);
        $data->title = $request->input('title');
        $data->price = $request->input('price');
        $data->title = $request->input('title');
        $data->description = $request->input('description');

        $data->update();

        return redirect('/foodmenu')->with('status', 'Updated Order Successfully');
    }

    // Add Reservation Table From Home Page
    public function reservation(Request $request)
    {
        $data = new Reservation;

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->guest = $request->input('guest');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->message = $request->input('message');

        $data->save();
        return redirect()->back();
    }

    // Reservation Page
    public function reservpage()
    {
        $data = Reservation::all();
        return view('admin.adminreservation', compact('data'));
    }

    // Chefs Page
    public function adminchefs()
    {
        $data = Chef::all();
        return view('admin.adminchefs', compact('data'));
    }

    // Form In Chef Page
    public function uploadChef(Request $request)
    {
        $data = new Chef;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimages', $imagename);
        $data->image = $imagename;

        $data->name = $request->input('name');
        $data->speciality = $request->input('speciality');

        $data->save();
        return redirect()->back()->with('status', 'Chef Added Successfully');
    }

    // Table In Chef Page
    public function updateChef($id)
    {
        $data = Chef::find($id);
        return view('admin.updateChef', compact('data'));
    }

    // Form In Update Chef Page
    public function upChef(Request $request, $id)
    {
        $data = Chef::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimages', $imagename);
        $data->image = $imagename;

        $data->name = $request->input('name');
        $data->speciality = $request->input('speciality');

        $data->update();

        return redirect()->back()->with('status', 'Updated Chef Successfully');
    }

    // Delete Chefs
    public function delChef($id)
    {
        $data = Chef::find($id);
        $data->delete();

        return redirect()->back()->with('status', 'Deleted Chef Successfully');
    }

}
