<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row" id="head">
            <div class="col-md-12">
                <h2><a href="{{route('admin.category')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  New Category, SubCategory, Brand, SubBrand</h2>
            </div>
        </div>
        <h5>กรุณาเลือกหมวดหมู่ที่ต้องการ</h5>
        <input type="radio" id="cat" name="addcat" value="cat" wire:model="addcat">
        <label for="cat">Category</label>
        <input type="radio" id="scat" name="addcat" value="scat" wire:model="addcat">
        <label for="scat">SubCategory</label>
        <input type="radio" id="bcat" name="addcat" value="bcat" wire:model="addcat">
        <label for="bcat">BrandCategory</label>
        <input type="radio" id="sbcat" name="addcat" value="sbcat" wire:model="addcat">
        <label for="sbcat">SubBrandCategory</label>
        
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form class="addproduct" wire:submit.prevent="storeCategory">
            <div class="row mb-3">
                @if($addcat)
                
                @if($addcat != "bcat")
                <div class="form-group">
                    <label class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" wire:model="name" wire:keyup="generateslug">
                        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Slug</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" wire:model="slug">
                        @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                @endif
                @if($addcat != "cat")
                <div class="form-group">
                    <label class="col-md-12">Category</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="category_id" wire:change="changeSubcategory">
                            <option value="">None</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                    </div>
                </div>
                @endif
                @if($addcat == "scat")
                <div class="form-group">
                    <label class="col-md-4">SubCategory Image</label>
                    <div class="col-md-4">
                        <input type="file" class="input-file" wire:model="image">
                        @if($image)
                            <img src="{{$image->temporaryUrl()}}" width="120"/>
                        @endif
                    </div>
                </div>
                @endif
                @if($addcat == "bcat" or $addcat == "sbcat")
                <div class="form-group">
                    <label class="col-md-12">Brand</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="brand_id">
                            <option value="">None</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                        @error('brand_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                    </div>
                </div>
                @endif
                @if($addcat == "bcat" or $addcat == "sbcat")
                <div class="form-group">
                    <label class="col-md-12">SubCategory</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="scategory_id">
                            <option value="">None</option>
                            @foreach($subcategories as $scategory)
                                <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                            @endforeach
                        </select>
                        @error('scategory_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <div class="col-md">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>    
                </div>
                @endif
            </div>
        </form>
    </div>
</div>

<style>
    #head{
        margin: 2% 0 2% 0;
    }
    .form-group{
        margin: 1% 0 1% 0;
    }
    .col-md-12 input {
        width:50%;
    }
</style>