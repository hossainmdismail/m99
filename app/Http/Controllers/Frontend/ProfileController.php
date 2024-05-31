<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $order = Order::get()->take(12);
        return view('Frontend.profile', ['order' => $order]);
    }
}
