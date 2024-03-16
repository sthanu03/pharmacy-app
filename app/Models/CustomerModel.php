<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    protected $table = 'customer';

    public function showCustomersList()
    {
        $getRecord = Customer::all(); // Example query to get customer records
        return view('admin.customers.list', ['getRecord' => $getRecord]);
    }
}
