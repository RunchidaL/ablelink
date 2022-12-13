<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-6">
                <h2><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  แก้ไข Footer</h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="footer">
                            <div class="row">                            
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">link-Facebook</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-md" wire:model="link_facebook">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label">link-Line</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control input-md" wire:model="link_line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label">link-Email</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control input-md" wire:model="link_email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label">link-Youtube</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control input-md" wire:model="link_youtube">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <p>Footer แถวที่ 1</p>
                                        <div class="col-md-6">
                                        <input type="text" class="form-control input-md mb-3" wire:model="title1" placeholder="ชื่อหัวข้อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="detail1_1" placeholder="บรรทัดที่ 1">
                                        <input type="text" class="form-control input-md mb-3" wire:model="detail1_2" placeholder="บรรทัดที่ 2">
                                        <input type="text" class="form-control input-md mb-3" wire:model="detail1_3" placeholder="บรรทัดที่ 3">
                                        <input type="text" class="form-control input-md mb-3" wire:model="detail1_4" placeholder="บรรทัดที่ 4">
                                        <input type="text" class="form-control input-md mb-3" wire:model="detail1_5" placeholder="บรรทัดที่ 5">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>Footer แถวที่ 2</p>
                                        <input type="text" class="form-control input-md mb-3" wire:model="title2" placeholder="ชื่อหัวข้อ">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail2_1" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link2_1" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail2_2" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link2_2" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail2_3" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link2_3" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail2_4" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link2_4" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail2_5" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link2_5" placeholder="link">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>Footer แถวที่ 3</p>
                                        <input type="text" class="form-control input-md mb-3" wire:model="title3" placeholder="ชื่อหัวข้อ">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail3_1" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link3_1" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail3_2"placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link3_2" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail3_3" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link3_3" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail3_4" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link3_4" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail3_5" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link3_5" placeholder="link">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <p>Footer แถวที่ 4</p>
                                        <input type="text" class="form-control input-md mb-3" wire:model="title4" placeholder="ชื่อหัวข้อ">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail4_1" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link4_1" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail4_2" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link4_2" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail4_3" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link4_3" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail4_4" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md mb-3" wire:model="link4_4" placeholder="link">
                                        <input type="text" class="form-control input-md mb-1" wire:model="detail4_5" placeholder="ชื่อ">
                                        <input type="text" class="form-control input-md" wire:model="link4_5" placeholder="link">
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

<style>
    nav svg{
        height: 20px;
    }
    nav .hidden{
        display: block !important;
    }
</style>