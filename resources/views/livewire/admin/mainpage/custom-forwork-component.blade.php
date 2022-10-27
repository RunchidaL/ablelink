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
                <h2><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  แก้ไขหน้าร่วมงานกับเรา</h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="customForwork">
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
                                        <label>หัวข้อ</label>
                                        <input type="text" class="form-control input-md" wire:model="title1">
                                        <label>รายละเอียด</label>
                                        <input type="text" class="form-control input-md mb-2" wire:model="service1">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service2">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service3">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service4">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service5">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service6">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service7">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service8">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service9">
                                        <input type="text" class="form-control input-md mb-2" wire:model="service10">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>หัวข้อ</label>
                                        <input type="text" class="form-control input-md" wire:model="title2">
                                        <label>ข้อมูล HR</label>
                                        <label>mail</label>
                                        <input type="text" class="form-control input-md" wire:model="hrmail">
                                        <label>เบอร์โทรศัพท์</label>
                                        <input type="text" class="form-control input-md" wire:model="hrtel">
                                        <label>หัวข้อย่อย</label>
                                        <input type="text" class="form-control input-md" wire:model="heading">
                                        <label>รายละเอียด</label>
                                        <input type="text" class="form-control input-md mb-2" wire:model="detail1">
                                        <input type="text" class="form-control input-md mb-2" wire:model="detail2">
                                        <input type="text" class="form-control input-md mb-2" wire:model="detail3">
                                        <input type="text" class="form-control input-md mb-2" wire:model="detail4">
                                        <input type="text" class="form-control input-md mb-2" wire:model="detail5">
                                        <input type="text" class="form-control input-md mb-2" wire:model="detail6">
                                        <input type="text" class="form-control input-md mb-2" wire:model="detail7">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

