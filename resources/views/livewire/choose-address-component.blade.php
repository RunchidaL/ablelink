<div class="container">
    <div class="row" id="order">
        <div class="col-4">
            <div class="check-payment">
                <div class="choose-payment">
                    <input type="radio" id="address" checked/>
                    <label for="address"></label>
                </div>
                <div class="credit">
                    <h5>{{$user->name}}</h5>
                    <p>{{$dealer->phonenumber}}</p>
                    <p>{{$dealer->address}} {{$dealer->subdistrict}} {{$dealer->district}} {{$dealer->county}} {{$dealer->zipcode}}</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="order-in-cart">
                <h5><b>สินค้าในตะกร้า</b></h5>
                <table class="table table-condensed">
                <thead>
                    <tr class="order-menu">
                        <td><b>สินค้า</b></td>
                        <td><b>รวม</b></td>
                    </tr>
                </thead>
                <tbody class="order-product">
                    @foreach ($cartitems as $item)
                    <tr class="cart-order">
                        <td>
                            <p>{{$item->model->slug}}, {{$item->model->name}} x {{$item->quantity}}</p>
                        </td>
                        <td>
                            @if($item->attribute == '')
                            <p>฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</p>
                            @else
                            <p>฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="order-conclu">
                        <td>ราคารวม</td>
                        @if(Session::has('chooseaddress'))
                        <td>฿{{number_format(Session::get('chooseaddress')['total'],2)}}</td>
                        @endif
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="row" id="order">
        <div class="col-4">
            @error('payment') <p class="text-danger">กรุณาเลือกวิธีชำระเงิน</p> @enderror
            <div class="check-payment">
                <div class="choose-payment">
                    <input type="radio" id="creditcompany" name="check" value="1" wire:model="payment"/>
                    <label for="creditcompany"></label>
                </div>
                <div class="credit">
                    <h5>จ่ายผ่านเครดิตบริษัท</h5>
                    <p>ยอดคงเหลือ {{number_format($user->dealer->coin,2)}} บาท</p>
                </div>
            </div><br>
            <div class="check-payment">
                <div class="choose-payment">
                    <input type="radio" id="creditcard" name="check" value="2" wire:model="payment"/>
                    <label for="creditcard"></label>
                </div>
                <div class="credit">
                    <h5>จ่ายผ่านบัตร</h5>
                    <form name="checkoutForm" method="POST" action="checkout.php">
                    <script type="text/javascript" src="https://cdn.omise.co/omise.js"
                        data-key="pkey_test_5stpiir1dcgcdklou95"
                        data-image="http://bit.ly/customer_image"
                        data-frame-label="shop"
                        data-button-label="Pay now"
                        data-submit-label="Submit"
                        data-location="no"
                        data-amount="10025"
                        data-currency="thb"
                        >
                    </script>
                    <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="order-in-cart">
                <h5><b>สินค้าในตะกร้า</b></h5>
                <table class="table table-condensed">
                <thead>
                    <tr class="order-menu">
                        <td><b>สินค้า</b></td>
                        <td><b>รวม</b></td>
                    </tr>
                </thead>
                <tbody class="order-product">
                    @foreach ($cartitems as $item)
                    <tr class="cart-order">
                        <td>
                            <p>{{$item->model->slug}}, {{$item->model->name}} x {{$item->quantity}}</p>
                        </td>
                        <td>
                            @if($item->attribute == '')
                            <p>฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</p>
                            @else
                            <p>฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="order-conclu">
                        <td>ราคารวม</td>
                        @if(Session::has('chooseaddress'))
                        <td>฿{{number_format(Session::get('chooseaddress')['total'],2)}}</td>
                        @endif
                    </tr>
                </tfoot>
                </table>
                {{$user->dealer->coin - Session::get('chooseaddress')['total']}}
                <button wire:click.prevent="checkout">ดำเนินการต่อ</button>
            </div>
        </div>
    </div>
</div>
