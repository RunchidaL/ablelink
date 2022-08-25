<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require_once dirname(__FILE__).'/omise-php/lib/Omise.php';
use OmiseCharge;
define('OMISE_API_VERSION', '2015-11-17');
define('OMISE_PUBLIC_KEY', 'pkey_test_5stpiir1dcgcdklou95');
define('OMISE_SECRET_KEY', 'skey_test_5stpiisho79oapcy3gf');
// use App\Http\Livewire\ChooseAddressComponent;
use App\Models\User;
use App\Models\Dealer;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart as Cart;
use App\Models\ProductModels;
use App\Models\Order;
use App\Models\OrderID;

class PaymentController extends Controller
{
    public function check(){
        $total = session()->get('chooseaddress')['total']*100;
        $charge = OmiseCharge::create(array(
        'amount' => $total,
        'currency' => 'thb',
        'card' => $_POST["omiseToken"]
        ));

        $status = ($charge['status']);

        if($status == 'successful'){
            $user = User::find(Auth::user()->id);
            $total = session()->get('chooseaddress')['total'];
            
    
            $orderid = New OrderID();
            $orderid->user_id = $user->id;
            $orderid->payment_code = 2;
            $orderid->address_id = 1;
            $orderid->total = $total;
            $orderid->save();
    
            $cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
            
            foreach($cartitems as $item)
            {
                $model = ProductModels::where('id',$item->product_id)->first();
                if($item->attribute)
                {
                    $model->stock = $model->stock - ($item->quantity * $item->attribute);
                }
                else
                {
                    $model->stock = $model->stock - $item->quantity;
                }
                $model->save();
    
                $order = New Order();
                $order->product_id = $item->product_id;
                $order->quantity = $item->quantity;
                if($item->attribute)
                {
                    $order->attribute = $item->attribute;
                }
                $id = OrderID::where('user_id',$user->id)->latest('created_at')->first();
                $order->order_id = $id->id;
                $order->save();
            }
            Cart::where('user_id',auth()->id())->delete();
            session()->forget('chooseaddress');

            return redirect('checkout');
        }
        else{
            return back();
        }
    }
}
