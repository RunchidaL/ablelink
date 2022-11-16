<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12" id="head">
                                <h2><a href="{{route('admin.AdminNewProducts')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  AddNewProducts</h2>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="addNewProduct">
                            <div class="form-group">
                                <label class="col-md-12">Name : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name">
                                    @error('name') <p class="text-danger">กรุณาใส่</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image(link) : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="img">
                                    @error('img') <p class="text-danger">กรุณาใส่</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product(link) : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="linkproduct">
                                    @error('linkproduct') <p class="text-danger">กรุณาใส่</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Brand : </label>
                                <select name="" id="" wire:model="brand_id">
                                    <option value="">Select</option>
                                    @foreach ($brand as $brands)
                                    <option value="{{$brands->id}}">{{$brands->name}}</option>
                                    @endforeach
                                </select>
                                @error('brand_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label"></label>
                                <div class="col-md-12">
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


