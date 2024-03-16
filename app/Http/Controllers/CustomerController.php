<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ustomerModel;

class CustomerController extends Controller
{
    public function list()
    {
        return view('admin.customers.list');
    }
    public function add()
    {
        return view('admin.customers.add');
    }

    public function insert( Request $request)
    {
        $customer = new customer();
        $customer->fullname = trim($request->fullname);
        $customer->address = trim($request->address);
        $customer->mobile = trim($request->mobile);
        $customer->save();

        return redirect ('admin.customers.list')->with('success', "Customer Added Successfully");
    }
}
