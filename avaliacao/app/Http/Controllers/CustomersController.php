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
        $get_customers_data = Customer::get();

        return view("customers.list",
        [
            'customers_data' => $get_customers_data
        ]);
    }

    public function add( Request $request )
    {
        $customer = new Customer;

        $get_username = Auth::user()->name;

        $customer = $customer->create( $request->all() +
        [
            'created_by' => $get_username
        ]);

        return Redirect::to('/customers');
    }

    public function edit( $id )
    {
        $customer_search_data = Customer::findOrFail( $id );

        return view('customers.form',
        [
            'customer_edit_data' => $customer_search_data
        ]);
    }

    public function update( $id, Request $request )
    {
        $get_username = Auth::user()->name;

        $get_current_time = now()->timestamp;

        $customer_search_data = Customer::findOrFail( $id );

        $customer_search_data->update( $request->all() +
        [
            'updated_by' => $get_username,
            'updated_at' => $get_current_time,
        ]);

        return Redirect::to('/customers');
    }

    public function delete( $id )
    {
        $customer_search_data = Customer::findOrFail( $id );

        $customer_search_data->delete();

        return Redirect::to('/customers');
    }
}
