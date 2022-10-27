<div style="margin-left: 5%; margin-right: 5%">
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-6">
                <h2><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  แก้ไขหน้าบริการ</h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="customService">
                            <div class="form-group">
                                <label class="col-md-6 control-label">Image</label>
                                <div class="col-md-6">
                                    <input type="file" class="input-file" wire:model="newimage" accept=".jpg,.jpeg,.png">
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120"/>
                                    @else
                                        <img src="{{asset('images/mainpage')}}/{{$image}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Title</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="title">
                                </div>
                            </div>

                            <br>
                            <div class="row">                            
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 1</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimage1" accept=".jpg,.jpeg,.png">
                                        @if($newimage1)
                                            <img src="{{$newimage1->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$image1}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="title1">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="description1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 2</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimage2" accept=".jpg,.jpeg,.png">
                                        @if($newimage2)
                                            <img src="{{$newimage2->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$image2}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="title2">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="description2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 3</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimage3" accept=".jpg,.jpeg,.png">
                                        @if($newimage3)
                                            <img src="{{$newimage3->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$image3}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="title3">

                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="description3"></textarea>
                                    </div>
                                </div> 
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

