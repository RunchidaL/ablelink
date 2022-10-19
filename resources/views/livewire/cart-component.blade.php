<div class="cart-page">
    <div class="container cart-home">
        @if(Session::has('message'))
            <div class="alert-wrap">
                <div class="alert alert-danger" role="alert">
                    {{Session::get('message')}}
                </div>
            </div>
        @endif
        @if($count > 0)
        <div class="cart-icon"><i class="bi bi-cart3"></i></div>
        <div class="table-responsive">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart-menu">
                        <td>รายการสินค้า</td>
                        <td></td>
                        <td style="width: 10%;">ราคา</td>
                        <td style="width: 8%;">จำนวน</td>
                        <td style="width: 10%;">รวม</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartitems as $item)
                    <tr class="cart-wrapper">
                        <td class="cart-product">
                            <a href="#"><img src="{{asset('/images/products')}}/{{$item->model->image}}"></a>
                        </td>
                        <td class="cart-name">
                            @if(empty($item->attribute))
                                <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}}</a>
                                @if($item->model->stock == 0)
                                <p>สินค้าหมด</p>
                                @elseif($item->quantity > $item->model->stock)
                                <p>สินค้าใน stock เหลือแค่ {{$item->model->stock}} ชิ้น</p>
                                @endif
                            @else
                                <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}} {{$item->attribute}} m</a>
                                @if($item->model->stock == 0)
                                <p>สินค้าหมด</p>
                                @elseif($item->quantity * $item->attribute > $item->model->stock)
                                <p>สินค้าใน stock เหลือแค่ {{$item->model->stock}} m</p>
                                @endif
                            @endif
                        </td>
                        <td class="cart-price">
                            @if(Auth::user()->role == 1)
                                @if($item->attribute == '')
                                    <p class="group-cen">฿{{number_format($item->model->customer_price,2)}}</p>
                                @else
                                    <p class="group-cen">฿{{number_format($item->model->customer_price * $item->attribute,2)}}</p>
                                @endif
                            @elseif(Auth::user()->role == 2)
                                @if($item->attribute == '')
                                    <p class="group-cen">฿{{number_format($item->model->dealer_price,2)}}</p>
                                @else
                                    <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->attribute,2)}}</p>
                                @endif
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
                            <a class="cart-quantity-delete" wire:click.prevent="deleteItems('{{$item->id}}')">
                                <i class="bi bi-trash"></i>
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
                        <td><span>ยอดชำระเงิน</span></td>
                        <td>฿{{number_format($total,2)}}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="cart-foot">
            <a class="button-choose" href="/shop">ดูสินค้าเพิ่มเติม</a>
            <button class="button-paid" wire:click="check">ชำระสินค้า</button>
        </div>
        @else
        <div class="alert-wrap">
            <div class="alert alert-danger" style="font-size: 1.2rem;" role="alert">
                ไม่มีสินค้าในตะกร้า
            </div>
        </div>
        @endif
    </div>

    <!-- responsive phone -->
    <div class="container phone-cart-home">
        @if(Session::has('message'))
            <div class="alert-wrap">
                <div class="alert alert-danger" role="alert">
                    {{Session::get('message')}}
                </div>
            </div>
        @endif
        @if($count > 0)
        <div class="cart-icon"><i class="bi bi-cart3"></i></div>
        <div class="phone-cart-menu"><span>รายการสินค้า</span></div>
            @foreach ($cartitems as $item)
            <div class="phone-cart-wrapper">
                <div class="phone-cart-left">
                    <div class="phone-cart-product">
                        <a href="#"><img src="{{asset('/images/products')}}/{{$item->model->image}}"></a>
                    </div>
                </div>
                <div class="phone-cart-right">
                    <div class="phone-cart-name">
                        @if(empty($item->attribute))
                            <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}}</a>
                            @if($item->model->stock == 0)
                            <p>สินค้าหมด</p>
                            @elseif($item->quantity > $item->model->stock)
                            <p>สินค้าใน stock เหลือแค่ {{$item->model->stock}} ชิ้น</p>
                            @endif
                        @else
                            <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}} {{$item->attribute}} m</a>
                            @if($item->model->stock == 0)
                            <p>สินค้าหมด</p>
                            @elseif($item->quantity * $item->attribute > $item->model->stock)
                            <p>สินค้าใน stock เหลือแค่ {{$item->model->stock}} m</p>
                            @endif
                        @endif
                    </div>
                    <div class="phone-cart-total">
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
                    </div>
                    <div class="phone-cart-quantity">
                        <div class="group-cen">
                            <a wire:click.prevent="decreaseQuantity('{{$item->id}}')"><i class="bi bi-dash"></i></a>
                            <span>{{$item->quantity}}</span>
                            <a wire:click.prevent="increaseQuantity('{{$item->id}}')"><i class="bi bi-plus"></i></a>
                        </div>
                        <a class="cart-quantity-delete" wire:click="deleteItems('{{$item->id}}')">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="phone-cart-conclu">
                <span>ยอดชำระเงิน</span>
                <span>฿{{number_format($total,2)}}</span>
            </div>
            <div class="phone-cart-foot">
                <a class="button-choose" href="/shop">ดูสินค้าเพิ่มเติม</a>
                <button class="button-paid" wire:click="check">ชำระสินค้า</button>
            </div>
        @else
        <div class="alert-wrap">
            <div class="alert alert-danger" style="font-size: 1rem;" role="alert">
                ไม่มีสินค้าในตะกร้า
            </div>
        </div>
        @endif
    </div>
</div>

<style>
.swal2-icon.swal2-warning {
    border-color: #dc7226;
    color: #dc7226;
}
.swal2-styled.swal2-confirm {
    border: 0;
    border-radius: 0.25em;
    background: initial;
    background-color: #194276;
    color: #fff;
    font-size: 1em;
}
</style>

<script>
    window.addEventListener('show-delete-confirmation', event =>{
        Swal.fire({
            title: 'ต้องการลบสินค้าใช่หรือไม่?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#194276',
            cancelButtonColor: '#d33',
            confirmButtonText: '&nbsp;   ใช่   &nbsp;',
            cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
        })
    });
    window.addEventListener('deletedItem', event =>{
        Swal.fire(
            'สำเร็จ!',
            'ลบสินค้าในตะกร้าเรียบร้อย',
            'success'
            )
    });
</script>
