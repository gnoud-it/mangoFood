<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LienHeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Liên hệ - Mango Food";
        return view('lienhe.index')->with("viewData", $viewData);
    }
}
