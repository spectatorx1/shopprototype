<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getSignup() {
        return view('user.signup');
    }

    public function postSignup(Request $request) {
        $this->validate($request, [
           'email' => 'email|required|unique:users',
            'password' => 'required|min:4|max:30'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        $user->save();

        return redirect()->route('product.index');
    }
}
