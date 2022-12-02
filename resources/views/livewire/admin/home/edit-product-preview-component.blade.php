<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12" id="head">
                                <h2><a href="{{route('admin.productpreview')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add New Product Preview</h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updatePreview">
                            <div class="form-group">
                                <label class="col-md-4">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" list="datalistOptions" wire:model="product_id" placeholder="PartNumber">
                                    @error('product_id') <p class="text-danger">{{ $message }}</p> @enderror
                                    <datalist id="datalistOptions">
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->slug}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
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
