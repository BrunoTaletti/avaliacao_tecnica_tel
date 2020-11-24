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

        $updateData->update( $request->all() +
        [
            'updated_by' => $updateUsername,
            'updated_at' => $updateCurrentTime,
        ]);

        return Redirect::to('/customers');
    }

    public function delete( $id )
    {
        $deleteData = User::findOrFail( $id );

        $deleteData->delete();

        return Redirect::to('/home');
    }
}
