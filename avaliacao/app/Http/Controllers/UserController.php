<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

        $userPassword = User::cryptPassword($request->input('password'));

        $updateCurrentTime = now()->timestamp;

        if($userPassword == null)
        {
            $updateData->update( $request->except(
            [
                'password'
            ]));
        }
        else
        {
            $updateData->update(
            [
                'name' => $userName,
                'email' => $userEmail,
                'password' => $userPassword,
                'updated_at' => $updateCurrentTime,
            ]);
        }

        return Redirect::to('/customers'); 

    }

    public function delete( $id )
    {
        $deleteData = User::findOrFail( $id );

        $deleteData->delete();

        return Redirect::to('/home');
    }
}
