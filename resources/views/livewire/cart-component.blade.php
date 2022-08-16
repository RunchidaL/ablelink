<div class="cart-page">
    <div class="container cart-home">
        @if(Session::has('message'))
            <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
        @endif
        @if($count > 0)
        <div class="cart-icon">
            <i class="bi bi-cart3"></i>
        </div>
        <div class="table-responsive cart-info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart-menu">
                        <td>รายการสินค้า</td>
                        <td></td>
                        <td style="width: 10%;">ราคา</td>
                        <td style="width: 8%;">จำนวน</td>
                        <td style="width: 10%;" >รวม</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody class="customer-product">
                    @foreach ($cartitems as $item)
                    <tr class="cart-wrapper">
                        <td class="cart-product">
                            <a href="#"><img src="{{asset('/images/products')}}/{{$item->model->image}}"></a>
                        </td>
                        <td class="cart-name">
                            @if($item->model->stock == 0)
                            <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}} <span style="color:red;">สินค้าหมด</span></a>
                            @elseif($item->qunatity > $item->model->stock)
                            <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}} <span style="color:red;">สินค้าใน stock เหลือ {{$item->model->stock}} ชิ้น</span></a>
                            @else
                            <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}}</a>
                            @endif
                            @if($item->attribute == '')
                            @else
                            <p>{{$item->attribute}} m</p>
                            @endif
                        </td>
                        <td class="cart-price">
                            @if(Auth::user()->role == 1)
                            <p class="group-cen">฿{{number_format($item->model->customer_price,2)}}</p>
                            @elseif(Auth::user()->role == 2)
                            <p class="group-cen">฿{{number_format($item->model->dealer_price,2)}}</p>
                            @endif
                        </td>
                        <td class="cart-quantity">
                            <div class="group-cen">
                                <a wire:click.prevent="decreaseQuantity('{{$item->id}}')"><i class="bi bi-dash"></i></a>
                                <span>{{$item->quantity}}</span>
                                <a wire:click.prevent="increaseQuantity('{{$item->id}}')"><i class="bi bi-plus"></i></a>
                            </div>
                        </td>
                        <td class="cart-total">
                        @if(Auth::user()->role == 1)
                            @if($item->attribute == '')
                            <p class="group-cen">฿{{number_format($item->model->customer_price * $item->quantity,2)}}</p>
                            @else
                            <p class="group-cen">฿{{number_format($item->model->customer_price * $item->quantity * $item->attribute,2)}}</p>
                            @endif
                        @elseif(Auth::user()->role == 2)
                            @if($item->attribute == '')
                            <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</p>
                            @else
                            <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</p>
                            @endif
                        @endif
                        </td>
                        <td class="cart-delete">
                            <a class="cart-quantity-delete text-danger" wire:click.prevent="delete('{{$item->id}}')" onclick="confirm('ต้องการลบใช่หรือไม่?') || event.stopImmediatePropagation()">
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
                        <td>฿{{number_format($total,2)}}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="cart-foot">
            <a class="button-choose" href="/shop">ดูสินค้าเพิ่มเติม</a>
            <a class="button-paid" href="/chooseaddress">ชำระสินค้า</a>
        </div>
        @else
        <div class="alert alert-danger" style="font-size: 1.2rem;" role="alert">
            ไม่มีสินค้าในตะกร้า
        </div>
        @endif
    </div>
</div>