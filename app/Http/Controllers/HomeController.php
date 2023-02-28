<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Trang chủ - Mango Food";
        return view('home.index')->with("viewData", $viewData);
    }
}
