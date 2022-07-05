<!-- link -->
<link href="/css/cart.css" rel="stylesheet">
<!-- link -->

<div class="cart-page">
    @if(Cart::count() > 0)
    <div class="container cart-home">
        <div class="cart-icon">
            <i class="bi bi-cart3"></i>
        </div>
        <div class="table-responsive cart-info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart-menu">
                        <td class="image">รายการสินค้า</td>
                        <td class="name"></td>
                        <td class="price">ราคา</td>
                        <td class="quantity">จำนวน</td>
                        <td class="total">รวม</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody class="customer-product">
                    @foreach (Cart::content() as $item)
                    <tr class="cart-wrapper">
                        <td class="cart-product">
                            <a href="#"><img src="\images\products\{{$item->image}}" alt="{{$item->name}}"></a>
                        </td>
                        <td class="cart-name">
                            <a href="{{route('product.detail',['slug'=>$item->slug])}}">{{$item->name}}</a>
                        </td>
                        <td class="cart-price">
                            <p class="group-cen">฿{{$item->web_price}}</p>
                        </td>
                        <td class="cart-quantity">
                            <div class="group-cen">
                                <a href="#" role="button" aria-pressed="true"><i class="bi bi-dash"></i></a>
                                <span>{{$item->qty}}</span>
                                <a href="#" role="button" aria-pressed="true"><i class="bi bi-plus"></i></a>
                            </div>
                        </td>
                        <td class="cart-total">
                            <p class="group-cen">฿{{$item->subtotal}}</p>
                        </td>
                        <td class="cart-delete" >
                            <a id="delete" class="cart-quantity-delete text-danger" onclick="return confirm('ต้องการลบใช่หรือไม่?')" href="#">
                                <i class="bi bi-x-lg"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="cart-conclu">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span><p class="button-total px-3">ยอดชำระเงิน</p></span></td>
                        <td>฿260.00</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="cart-foot">
            <a class="button-choose" href="/shop">ดูสินค้าเพิ่มเติม</a>
            <a class="button-paid" href="#">ชำระสินค้า</a>
        </div>
    </div>
    @else
        <div class="alert alert-danger" style="font-size: 1.2rem;" role="alert">
            ไม่มีสินค้าในตะกร้า
        </div>
    @endif    
</div>
