<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GioiThieuController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Giới thiệu- Mango Food";
        return view('gioithieu.index')->with("viewData", $viewData);
    }
}
