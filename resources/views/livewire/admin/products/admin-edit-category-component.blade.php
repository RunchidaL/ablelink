<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row" id="head">
            <div class="col-md-4">
                <h2><a href="{{route('admin.category')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Category</h2>
            </div>
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form class="addproduct" wire:submit.prevent="updateCategory">
            @if(empty($bcategory_slug))
            <div class="row mb-3">
                <div class="form-group">
                    <label class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" wire:model="name" wire:keyup="generateslug">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Slug</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" wire:model="slug">
                    </div>
                </div>
                @if($category_slug and $scategory_slug and empty($bcategory_slug))
                <div class="form-group">
                    <label class="col-md-4">Subcategory Image</label>
                    <div class="col-md-4">
                        <input type="file" class="input-file" wire:model="newimage">
                        @if($newimage)
                            <img src="{{$newimage->temporaryUrl()}}" width="120"/>
                        @else
                            <img src="{{asset('images/products')}}/{{$image}}" width="120"/>
                        @endif
                    </div>
                </div>
                @endif
            @else
            <div class="form-group">
                <label class="col-md-12">Brand</label>
                <div class="col-md-12">
                    <select name="form-control input-md" wire:model="brand_id">
                        <option value="">None</option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
                <div class="form-group">
                    <div class="col-md">
                        <input type="submit" value="Update" class="btn btn-success">
                    </div>    
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    #head{
        margin: 2% 0 2% 0;
    }
    .addproduct{
        justify-content: center;
    }
    .form-group{
        margin: 2% 0 2% 0;
    }
    .col-md-12 input,.col-md-12 select{
        width:50%;
    }
</style>