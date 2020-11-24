<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

use Auth;
use Redirect;

class CustomersController extends Controller
{
    public function new()
    {
        return view("customers.form");
    }

    public function list()
    {
        $listData = Customer::get();

        return view("customers.list",
        [
            'customers_data' => $listData
        ]);
    }

    public function add( Request $request )
    {
        $addCustomer = new Customer;

        $addUsername = Auth::user()->name;
        
        $birthPlace = $request->input('birthPlace');
        
        $birthDate = $request->input('birthDate');
        
        if($birthPlace == "SP")
        {
            $request->validate(
            [
                'rg' => 'required'
            ],
            [
                'rg.required' => 'O campo RG é obrigatório.'
            ]);
        }
        
        if($birthPlace == "BA")
        {
            $request->validate(
            [
                'birthDate' => 'required|date|before:18 years ago'
            ],
            [
                'birthDate.before' => 'Desculpe, mas a idade mínima é 18 anos.'
            ]);
        }

        echo $birthPlace;

        $addCustomer = $addCustomer->create( $request->all() +
        [
            'created_by' => $addUsername
        ]);

        return Redirect::to('/customers');
    }

    public function edit( $id )
    {
        $editData = Customer::findOrFail( $id );

        return view('customers.form',
        [
            'editFormularyData' => $editData
        ]);
    }

    public function update( $id, Request $request )
    {
        $updateUsername = Auth::user()->name;

        $updateCurrentTime = now()->timestamp;

        $updateData = Customer::findOrFail( $id );

        $updateData->update( $request->all() +
        [
            'updated_by' => $updateUsername,
            'updated_at' => $updateCurrentTime,
        ]);

        return Redirect::to('/customers');
    }

    public function delete( $id )
    {
        $deleteData = Customer::findOrFail( $id );

        $deleteData->delete();

        return Redirect::to('/customers');
    }
}
