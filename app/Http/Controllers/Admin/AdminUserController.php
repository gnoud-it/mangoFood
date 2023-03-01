<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin - Khách hàng - MangoFood";
        $viewData["subtitle"] = "List of products";
        $viewData["users"] = User::all();

        return view('admin.user.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $user = User::findOrFail($id);
        $viewData["title"] = $user->getName() . " - MangoFood";
        $viewData["subtitle"] = $user->getName() . " - Product information";

        $viewData["user"] = $user;
        return view('admin.user.show')->with("viewData", $viewData);
    }
}
