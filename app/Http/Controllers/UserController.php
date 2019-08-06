<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function new(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('daftar_pengguna');
    }

    public function edit($id){
        $user = User::find($id);
        return view('edit_pengguna', ['user'=>$user]);
    }

    public function edit_post(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('daftar_pengguna');
    }

    public function delete(Request $request){
        $user = User::destroy($request->id);
        return redirect()->route('daftar_pengguna');
    }
}
