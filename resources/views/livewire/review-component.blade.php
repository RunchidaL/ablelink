<div style="padding:2% 5%;">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        @if(Session::has('danger'))
            <div class="alert alert-danger" role="alert">{{Session::get('danger')}}</div>
        @endif
        <div class="review-page">
            <form wire:submit.prevent="addReview">
                <a href="{{route('order.detail',['order_id'=>$item->order_id])}}"><i class="bi bi-arrow-left"></i> ย้อนกลับ</a>
                <div class="review-img">
                <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}"><img src="{{asset('/images/products')}}/{{$item->model->image}}" alt="" width="180"></a>
                </div>  
                <div class="review-name">
                    <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}"><p style="center">{{$item->model->name}}</p>   </a>
                </div>
                <div class="review-point">
                    <div class="rating-group">
                        <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio" wire:model="rating">
                        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio" wire:model="rating">
                        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio" wire:model="rating">
                        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio" wire:model="rating">
                        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio" wire:model="rating">
                    </div>
                </div>
                <div class="review-comment">
                    <div class="col-md-8"> 
                        <div>
<<<<<<< HEAD
                            <label>ความคิดเห็นของคุณ</label>
                            <textarea type="text" class="form-control" wire:model="comment" col="30" rows="5" required></textarea>
                        </div>
                        <div class="review-button">
                            <a href="{{route('order.detail',['order_id'=>$item->order_id])}}" class="btn btn-secondary">ย้อนกลับ</a>
                            <button type="submit" class="btn btn-success">ส่ง</button>
=======
                            <h5>รีวิวสินค้า</h5>
                            <label>ความคิดเห็นของคุณ</label>
                            <textarea type="text" class="form-control" wire:model="comment" col="30" rows="5"></textarea>
                            @error('comment') <p class="text-danger">กรุณาใส่ความคิดเห็น</p> @enderror
                        </div>
                        <div class="review-button">
                            <button type="submit" class="btn btn">ส่ง</button>
>>>>>>> b89918132b61dd49364687b73f132d1357653781
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<<<<<<< HEAD
<style>
=======
<script>
    window.addEventListener('alert-review-success', event =>{
        Swal.fire({
            title: 'รีวิวสินค้าสำเร็จ',
            icon: 'success',
            timer: 2000,
        })
    });
</script>

<style>
    .swal2-styled.swal2-confirm{
        background-color: #194276;
    }

>>>>>>> b89918132b61dd49364687b73f132d1357653781
    .review-img img{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
<<<<<<< HEAD

    .review-name{
        text-align: center;
    }

    .review-point{
        display: flex;
        justify-content: center;
        margin: 2% 0;
    }

    .rating__input{
        position: absolute !important;
        left: -9999px !important;
    }
    
    .rating__icon--star{
        color: #FFCF00;
        font-size: 2rem;
    }

    .rating__input:checked ~ .rating__label .rating__icon--star{
        color: #ddd;
    }

    .rating-group:hover .rating__label .rating__icon--star{
        color: #FFCF00;
    }

    .rating__input:hover ~ .rating__label .rating__icon--star{
        color: #ddd;
    }

    .review-comment{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .review-button{
        display: flex;
        margin: 20px 0;
        justify-content: space-between
    }

    .review-button .btn{
        width: 150px;
        height: 40px;
        border-radius: 30px;
    }

=======

    .review-name{
        text-align: center;
    }

    .review-point{
        display: flex;
        justify-content: center;
        margin: 2% 0;
    }

    .rating__input{
        position: absolute !important;
        left: -9999px !important;
    }
    
    .rating__icon--star{
        color: #FFCF00;
        font-size: 2rem;
    }

    .rating__input:checked ~ .rating__label .rating__icon--star{
        color: #ddd;
    }

    .rating-group:hover .rating__label .rating__icon--star{
        color: #FFCF00;
    }

    .rating__input:hover ~ .rating__label .rating__icon--star{
        color: #ddd;
    }

    .review-comment{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .review-button{
        display: flex;
        margin: 20px 0;
        justify-content: end;
    }

    .review-button .btn{
        width: 150px;
        height: 40px;
        border-radius: 30px;
    }

    .btn{
        background-color: #194276;
        color: white;
    }

>>>>>>> b89918132b61dd49364687b73f132d1357653781
    @media screen and (max-width: 767px){
    .review-point{
        display: flex;
        justify-content: center;
        margin: 5% 0;
    }
}
<<<<<<< HEAD
</style>
=======
</style>
>>>>>>> b89918132b61dd49364687b73f132d1357653781
