<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function index()
    {
        //Send request to web service
        $products = HTTP::get('http://localhost/pages/store/public/api/products');
        //Convert response to array
        $products = $products->json();
        return view('welcome', compact('products'));
    }
}
