<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Blog - Mango Food";
        return view('blog.index')->with("viewData", $viewData);
    }
}
