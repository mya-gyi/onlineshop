<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}

public function orders()
{
    $orders = Order::all();
    return view('admin.orders', compact('orders'));
}
}
