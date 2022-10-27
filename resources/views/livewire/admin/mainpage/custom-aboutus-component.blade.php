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
                <h2><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  แก้ไขหน้าเกี่ยวกับเรา</h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="customAboutus">
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
                                <label class="col-md-6 control-label">Company</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-8 control-label">Description</label>
                                <div class="col-md-8">
                                    <textarea type="text" class="form-control input-md" cols="20" rows="10" wire:model="description"></textarea>
                                </div>
                            </div>

                            <br>
                            <h3>Vision</h3>
                            <div class="row">                            
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 1</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimagev1" accept=".jpg,.jpeg,.png">
                                        @if($newimagev1)
                                            <img src="{{$newimagev1->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagev1}}" width="120"/>
                                        @endif

                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlev1">

                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="v1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 2</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimagev2" accept=".jpg,.jpeg,.png">
                                        @if($newimagev2)
                                            <img src="{{$newimagev2->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagev2}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlev2">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="v2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 3</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimagev3" accept=".jpg,.jpeg,.png">
                                        @if($newimagev3)
                                            <img src="{{$newimagev3->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagev3}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlev3">

                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="v3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 4</p>
                                        <label class="form-group">Image</label>
                                        <input type="file" class="input-file" wire:model="newimagev4" accept=".jpg,.jpeg,.png">
                                        @if($newimagev4)
                                            <img src="{{$newimagev4->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagev4}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlev4">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="v4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <h3>Mission</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 1</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimagem1" accept=".jpg,.jpeg,.png">
                                        @if($newimagem1)
                                            <img src="{{$newimagem1->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagem1}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlem1">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="m1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 2</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimagem2" accept=".jpg,.jpeg,.png">
                                        @if($newimagem2)
                                            <img src="{{$newimagem2->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagem2}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlem2">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="m2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 3</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimagem3" accept=".jpg,.jpeg,.png">
                                        @if($newimagem3)
                                            <img src="{{$newimagem3->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagem3}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlem3">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="m3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>หัวข้อย่อย 4</p>
                                        <label>Image</label>
                                        <input type="file" class="input-file" wire:model="newimagem4" accept=".jpg,.jpeg,.png">
                                        @if($newimagem4)
                                            <img src="{{$newimagem4->temporaryUrl()}}" width="120"/>
                                        @else
                                            <img src="{{asset('images/mainpage')}}/{{$imagem4}}" width="120"/>
                                        @endif
                                        <br>
                                        <label>Title</label>
                                        <input type="text" class="form-control input-md" wire:model="titlem4">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="m4"></textarea>
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

