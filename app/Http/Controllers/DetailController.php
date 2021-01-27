<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\TravelPackage;
use Illuminate\Http\Request;

=======
use Illuminate\Http\Request;

use App\TravelPackage;

>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
<<<<<<< HEAD
        $item = TravelPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
=======
        $item = TravelPackage::with(['galleries'])
        ->where('slug',$slug)
        ->firstOrFail();
        return view('pages.detail',[
            'item'=>$item]);

>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }
}
