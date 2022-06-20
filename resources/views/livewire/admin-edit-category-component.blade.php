<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Edit Category</h5>
                <a href="{{route('admin.category')}}">All Category</a>
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <form class="addproduct" wire:submit.prevent="updateCategory">
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">Category Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" wire:model="name" wire:keyup="generateslug">
                        </div>
                        <label class="col-md-4 col-form-label text-md-end">Category Slug</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" wire:model="slug">
                        </div>
                        <label class="col-md-4 col-form-label text-md-end">SubCategory</label>
                        <div class="col-md-6">
                            <select class="form-control" wire:model="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Update" class="btn btn mx-auto">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

