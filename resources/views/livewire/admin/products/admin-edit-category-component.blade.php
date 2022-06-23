<div>
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
            <div class="row mb-3">
                <div class="form-group">
                    <label class="col-md-12">Category Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" wire:model="name" wire:keyup="generateslug">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Category Slug</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" wire:model="slug">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">SubCategory</label>
                    <div class="col-md-12">
                        <select class="form-control" wire:model="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md">
                        <input type="submit" value="Submit" class="btn btn-success">
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