<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

<<<<<<< HEAD
=======
use App\TravelPackage;
use App\Transaction;


>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
class DashboardController extends Controller
{
    public function index(Request $request)
    {
<<<<<<< HEAD
        return view('pages.admin.dashboard');
=======
        return view('pages.admin.dashboard',[
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status','PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status','SUCCESS')->count()
        ]);
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }
}
