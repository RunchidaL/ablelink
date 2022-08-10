<div class="container">
    <div class="row" id="order">
        <div class="col-4">
            <div class="check-payment">
                <div class="choose-payment">
                    <input type="radio" id="creditcompany" name="check" />
                    <label for="creditcompany"></label>
                </div>
                <div class="credit">
                    <h5>จ่ายผ่านเครดิตบริษัท</h5>
                    <p>ยอดคงเหลือ {{number_format($user->Dealer->coin,2)}} บาท</p>
                </div>
            </div><br>
            <div class="check-payment">
                <div class="choose-payment">
                    <input type="radio" id="creditcard" name="check"/>
                    <label for="creditcard"></label>
                </div>
                <div class="credit">
                    <h5>จ่ายผ่านบัตร</h5>
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
                            <p>{{number_format($item->model->dealer_price * $item->quantity,2)}} บาท</p>
                            @else
                            <p>{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}} บาท</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="order-conclu">
                        <td>ราคารวม</td>
                        <td>฿</td>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
