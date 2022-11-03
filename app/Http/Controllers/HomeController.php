<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "Home";
    }
    public function views(){
        $arrproduct = ["Kitchen Utensil Set", "Living Room Furniture Set", "Bedroom Furniture Set"];
        return view('Home')->with('Home', $arrproduct);
    }
}
