<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    // $user = User::find(1);
    $order = Order::find(1);
    // $user = $order->user;
    $products = $order->products;
    return response()->json([
      'test' => $products
    ]);
  }
}
