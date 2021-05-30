<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return  view('users.index', ['users' => DB::table('users')->get()]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        return view('users.show', ['user' => DB::table('users')->where('id', $id)->first()]);
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('users.index')->with('status', 'User has been created successfully');
    }

    public function edit($id)
    {
        return view('users.edit', ['user' => DB::table('users')->where('id', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('users.index')->with('status', 'User has been updated successfully');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('status', 'User has been deleted successfully');
    }

    public function storePhone()
    {
        $phone = new Phone();
        $phone->phone = '3125678789';
        $user = new User();
        $user->name = 'name';
        $user->email = 'email@mail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->phone()->save($phone);
        return 'Phone has been created successfully!';
    }

    public function getUserPhone($id)
    {
        $phone = User::findOrFail($id)->phone;
        return $phone;
    }
}
