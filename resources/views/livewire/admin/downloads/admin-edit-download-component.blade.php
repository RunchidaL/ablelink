<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row"id="head">
                            <div class="col-md-4">
                                <h2><a href="{{route('admin.download')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add Download</h2>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @elseif(Session::has('danger'))
                        <div class="alert alert-danger" role="alert">{{Session::get('danger')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="updateDownload">
                            <div class="form-group">
                                <label class="col-md-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name">
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
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 my-2"><b>กรุณาเลือกใส่ไฟล์(ขนาดไม่เกิน 12 MB) หรือลิงค์ (ชื่อไฟล์หรือลิงค์เดิมคือ 
                                    @if($download->file)
                                    {{$download->file}})
                                    @elseif($download->filetext)
                                    {{$download->filetext}})
                                    @endif
                                </b></label>
                                <div class="col-md-6">
                                    @if($category_id != 5)
                                    <label class="col-md-12">File</label>
                                    <input type="file" class="input-file" wire:model="newfile">
                                    @endif
                                    <label class="col-md-12">Link</label>
                                    <input type="text" class="form-control" wire:model="newfiletext">
                                @error('newfile') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md">
                                    <input type="submit" value="Update" class="btn btn-success">
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
    #head{
        margin: 2% 0 2% 0;
    }
    .form-group{
        margin: 1% 0 1% 0;
    }
</style>


