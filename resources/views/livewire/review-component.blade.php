<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <form class="form-panel" wire:submit.prevent="addReview">
                            <h5>รีวิวสินค้า</h5>
                            <div class="row justify-content-start">
                                <div class="col-2">
                                    <img src="{{asset('/images/products')}}/{{$item->model->image}}" alt="" width="120">
                                </div>
                                <div class="col-6">
                                    <p>{{$item->model->name}}</p>
                                </div>
                            </div>   
                            </div>
                            <span>ให้คะแนน</span>
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
                            <div class="form-group">
                                <label class="col-md-12">ความคิดเห็นของคุณ</label>
                                <div class="col-md-12">
                                    <textarea type="text" class="form-control" wire:model="comment" col="30" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn">ส่ง</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .row{
        margin: 25px;
    }
    .btn{
        margin: 10px 0;
        background: #194276;
        color: white;
    }
    .rating__input {
    position: absolute !important;
    left: -9999px !important;
    }
    .rating__icon--star {
    color: #FFCF00;
    }

    .rating__input:checked ~ .rating__label .rating__icon--star {
    color: #ddd;
    }
    .rating-group:hover .rating__label .rating__icon--star {
    color: #FFCF00;
    }
    .rating__input:hover ~ .rating__label .rating__icon--star {
    color: #ddd;
    }

</style>
