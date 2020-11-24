<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;
use Redirect;

class UserController extends Controller
{
    public function edit( $id )
    {
        $editData = User::findOrFail( $id );

        return view('users.form',
        [
            'user_data' => $editData
        ]);
    }

    public function update( $id, Request $request )
    {
        $updateData = User::findOrFail( $id );

        $userName = $request->input('name');
        
        $userEmail = $request->input('email');
        
        $userPassword = $request->input('password');

        return view('users.form',
        [
            'user_data' => $updateData
        ]);

        return Redirect::to('/customers');
    }
}
