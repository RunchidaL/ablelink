<div class="cart-page">
    <div class="container cart-home">
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            {{Session::get('success_message')}}
        </div>
    @endif
    @if(Cart::count() > 0)    
        <div class="cart-icon">
            <i class="bi bi-cart3"></i>
        </div>
        <div class="table-responsive cart-info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart-menu">
                        <td>รายการสินค้า</td>
                        <td></td>
                        <td>ราคา</td>
                        <td>จำนวน</td>
                        <td>รวม</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody class="customer-product">
                    @foreach (Cart::content() as $item)
                    <tr class="cart-wrapper">
                        <td class="cart-product">
                            @if($item->model->image =='')
                            <a href="#"><img src="{{asset('/images/products')}}/{{$item->model->product->image}}"></a>
                            @else
                            <a href="#"><img src="{{asset('/images/products')}}/{{$item->model->image}}"></a>
                            @endif
                        </td>
                        <td class="cart-name">
                            <a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                                <p>{{number_format($item->subtotal,2)/number_format($item->model->customer_price,2)}}m</p>
                        </td>
                        <td class="cart-price">
                            <p class="group-cen">฿{{number_format($item->model->customer_price,2)}}</p>
                        </td>
                        <td class="cart-quantity">
                            <div class="group-cen">
                                <a wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><i class="bi bi-dash"></i></a>
                                <span>{{$item->qty}}</span>
                                <a wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><i class="bi bi-plus"></i></a>
                            </div>
                        </td>
                        <td class="cart-total">
                            <p class="group-cen">฿{{number_format($item->subtotal,2)}}</p>
                        </td>
                        <td class="cart-delete">
                            <a class="cart-quantity-delete text-danger" wire:click.prevent="delete('{{$item->rowId}}')" onclick="return confirm('ต้องการลบใช่หรือไม่?')">
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
                        <td>฿{{Cart::subtotal()}}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="cart-foot">
            <a class="button-choose" href="/shop">ดูสินค้าเพิ่มเติม</a>
            <a class="button-paid" href="#">ชำระสินค้า</a>
        </div>
    @else
        <div class="alert alert-danger" style="font-size: 1.2rem;" role="alert">
            ไม่มีสินค้าในตะกร้า
        </div>
    @endif 
    </div>
</div>
