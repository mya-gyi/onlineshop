<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Total numbers of Prodcuts.
        $totalProducts = Product::count();

        // Total numbers of customers(users with role 'customer'.)
        $totalCustomers = User::role('customer')->count();

        // Total numders of orders;
        $totalOrders = Order::where('status', 'completes')->sum('total_amount');


    }
}
