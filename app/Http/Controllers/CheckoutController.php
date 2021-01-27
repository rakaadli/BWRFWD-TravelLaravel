<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Mail;
use App\Transaction;
use App\TransactionDetail;
use App\TravelPackage;
use Carbon\Carbon;
use App\Mail\TransactionSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;


=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\TravelPackage;
use App\Transaction;
use App\TransactionDetail;

use Carbon\Carbon;

>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
<<<<<<< HEAD
        $item = Transaction::with(['details','travel_package','user'])->findOrFail($id);

        return view('pages.checkout',[
            'item' => $item
        ]);
=======
        $item = Transaction::with('details','travel_package','user')->findOrFail($id);
        return view('pages.checkout',[
    'item' => $item 
    ]);
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);
<<<<<<< HEAD

=======
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
<<<<<<< HEAD
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findorFail($detail_id);
=======


        ]);

        return redirect()->route('checkout',$transaction->id);
        }

    public function remove(Request $request, $detail_id)
    {
        $item = Transactiondetail::findOrFail($detail_id);
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd

        $transaction = Transaction::with(['details','travel_package'])
            ->findOrFail($item->transactions_id);

<<<<<<< HEAD
        if($item->is_visa)
        {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->transaction_total -= $transaction->travel_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
=======
   if($request->is_visa)
         {
       $transaction->transaction_total -= 190;
        $transaction->additional_visa -= 190;
        }
    
           $transaction->transaction_total -= $transaction->travel_package->price;
    
         $transaction->save();
         $item->delete();

         return redirect()-route('checkout',$item->transactions_id);
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }

    public function create(Request $request, $id)
    {
        $request->validate([
<<<<<<< HEAD
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required',
        ]);

=======
            'username' => 'required|string|exists:user,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);
        
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        if($request->is_visa)
        {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->transaction_total += $transaction->travel_package->price;

        $transaction->save();
<<<<<<< HEAD

        return redirect()->route('checkout', $id);
=======
        
        
        return redirect()->route('checkout',$id);
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    }

    public function success(Request $request, $id)
    {
<<<<<<< HEAD
        $transaction = Transaction::with(['details','travel_package.galleries','user'])->findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        // Set konfigurasi midtrans
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // Buat array untuk dikirim ke midtrans
        $midtrans_params = array(
            'transaction_details' => array(
                'order_id' => 'MIDTRANS-' . $transaction->id,
                'gross_amount' => (int) $transaction->transaction_total,
            ),
            'customer_details' => array(
                'first_name'    => $transaction->user->name,
                'email'         => $transaction->user->email
            ),
            'enabled_payments' => array('gopay','bank_transfer'),
            'vtweb' => array()
        );

        try {
            // Ambil halaman payment midtrans
            $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;

            // Redirect ke halaman midtrans
            header('Location: ' . $paymentUrl);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

=======
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();
        return view('pages.success');
    }
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
}
