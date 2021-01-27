<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
=======
use Illuminate\Http\Request;

use App\TravelPackage;

class HomeController extends Controller
{

>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
