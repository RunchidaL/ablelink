<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row" id="head">
                            <div class="col-md-4">
                                <h2><a href="{{route('admin.download')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add New Download</h2>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @elseif(Session::has('danger'))
                        <div class="alert alert-danger" role="alert">{{Session::get('danger')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="addDownload">
                            <div class="form-group">
                                <label class="col-md-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name">
                                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Category</label>
                                <div class="col-md-4">
                                <select class="form-control form-control" name="category" wire:model="category_id">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Brand</label>
                                <div class="col-md-2">
                                    <select class="form-control" wire:model="brand_id">
                                        <option value="">Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 my-2"><b>กรุณาเลือกใส่ไฟล์(ขนาดไม่เกิน 12 MB) หรือลิงค์</b></label>
                                <div class="col-md-6">
                                    @if($category_id != 5)
                                    <label class="col-md-12">File</label>
                                    <input type="file" class="input-file" wire:model="file">
                                    @endif
                                    @error('file') <p class="text-danger">{{ $message }}</p> @enderror
                                    <label class="col-md-12">Link</label>
                                    <input type="text" class="form-control" wire:model="filetext">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success my-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <style>
    #head{
        font-size: 30px;
    }
    .col-md-12{
        font-size: 15px;
        background: rgb(243, 243, 243);
        border-radius: 20px;
    }
    .panel-heading.head{
        font-size: 50px;
    }
    .panel-body{
        margin: 2% 5% 2% 5%;
    }
    .row{
        margin: 25px;
    }
    button{
        margin-top: 2%
    }
</style> -->

