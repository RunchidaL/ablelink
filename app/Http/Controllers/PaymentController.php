<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
require_once dirname(__FILE__).'/omise-php/lib/Omise.php';
use OmiseCharge;
define('OMISE_API_VERSION', '2015-11-17');
define('OMISE_PUBLIC_KEY', 'pkey_test_5t30hpp2jv76v7wwj48');
define('OMISE_SECRET_KEY', 'skey_test_5t30hsx6y9isyepsfvw');
// use App\Http\Livewire\ChooseAddressComponent;
use App\Models\User;
use App\Models\Dealer;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart as Cart;
use App\Models\ProductModels;
use App\Models\Order;
use App\Models\OrderID;


class PaymentController extends Controller
{
    public function check(Request $request){
        // $request->validate([
        //     'ad' => 'required',
        // ]);
        if($request['ad'] == 'new'){
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'address' => 'required',
                'subdistrict' => 'required',
                'district' => 'required',
                'county' => 'required',
                'zipcode' => 'required',
                'phone' => 'required',
            ]);
        }
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
    
            if($user->role == '2'){
                $orderid = New OrderID();
                $orderid->user_id = $user->id;
                $orderid->payment_code = 2;
                $orderid->total = $total;
                $orderid->firstname = $user->dealer->firstname;
                $orderid->lastname = $user->dealer->lastname;
                $orderid->email = $user->dealer->emailaddress;
                $orderid->address = $user->dealer->address;
                $orderid->subdistrict = $user->dealer->subdistrict;
                $orderid->district = $user->dealer->district;
                $orderid->county = $user->dealer->county;
                $orderid->zipcode = $user->dealer->zipcode;
                $orderid->phonenumber = $user->dealer->phonenumber;
                $orderid->company = $user->dealer->companyTH;
                $orderid->save();
            }
            else{
                $orderid = New OrderID();
                $orderid->user_id = $user->id;
                $orderid->payment_code = 2;
                if($request['ad'] == 'new'){
                    $useraddress = New CustomerAddress();
                    $useraddress->firstname = $request['fname'];
                    $useraddress->lastname = $request['lname'];
                    $useraddress->address = $request['address'];
                    $useraddress->subdistrict = $request['subdistrict'];
                    $useraddress->district = $request['district'];
                    $useraddress->county = $request['county'];
                    $useraddress->zipcode = $request['zipcode'];
                    $useraddress->phonenumber = $request['phone'];
                    $useraddress->customerid = $user->id;
                    $useraddress->save();

                    $orderid->firstname = $request['fname'];
                    $orderid->lastname = $request['lname'];
                    $orderid->email = $user->email;
                    $orderid->address = $request['address'];
                    $orderid->subdistrict = $request['subdistrict'];
                    $orderid->district = $request['district'];
                    $orderid->county = $request['county'];
                    $orderid->zipcode = $request['zipcode'];
                    $orderid->phonenumber = $request['phone'];
                    $orderid->save();
                }
                else{
                    $id_ad = $request['ad'];
                    $ad = CustomerAddress::find($id_ad);
                    $orderid->firstname = $ad->firstname;
                    $orderid->lastname = $ad->lastname;
                    $orderid->email = $user->email;
                    $orderid->address = $ad->address;
                    $orderid->subdistrict = $ad->subdistrict;
                    $orderid->district = $ad->district;
                    $orderid->county = $ad->county;
                    $orderid->zipcode = $ad->zipcode;
                    $orderid->phonenumber = $ad->phonenumber;
                }
                $orderid->total = $total;
                $orderid->save();
            }
    
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
