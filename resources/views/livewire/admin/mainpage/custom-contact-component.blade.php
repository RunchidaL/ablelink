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
                <h2><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  แก้ไขหน้าติดต่อเรา</h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="customContact">
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

                            <div class="form-group">
                                <br>
                                <label class="col-md-6 control-label">Address</label>
                                <div class="col-md-6">
                                    <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="Address"></textarea>
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Name: Facebook</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="facebook">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">link-Facebook</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="link_facebook">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Name: Line</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">link-Line</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="link_line">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Name: Youtube</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="youtube">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">link-Youtube</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="link_youtube">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Name: Email</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">link-Email</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="link_email">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-md-6 control-label">เบอร์โทรศัพท์</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-md" wire:model="tel">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-md-8 control-label">link-Googlemap</label>
                                <div class="col-md-8">
                                    <textarea type="text" class="form-control input-md" cols="20" rows="5" wire:model="googlemap"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

