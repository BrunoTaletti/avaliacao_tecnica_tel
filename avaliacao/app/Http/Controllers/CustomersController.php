<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    public function list_customers()
    {
        $get_customers_data = Customer::get();

        return view("customers.list", 
        [
            'customers_data' => $get_customers_data
        ]);
    }

    public function new_customer()  
    {
        return view("customers.add");
    }
}
