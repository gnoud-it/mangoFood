<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin - Trang chủ - MangoFood";
        return view('admin.home.index')->with("viewData", $viewData);
    }

    public function orders()
    {
        $viewData = [];
        $viewData["title"] = "Admin - Đơn hàng - MangoFood";
        $viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        return view('admin.home.orders')->with("viewData", $viewData);
    }
}
