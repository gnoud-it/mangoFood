<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Menu - MangoFood";
        $viewData["products"] = Product::all();
        return view('menu.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = "Chi tiết - MangoFood";
        $viewData["product"] = $product;
        return view('menu.show')->with("viewData", $viewData);
    }
}
