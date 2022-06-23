<div>
    <div class="container">
        <div class="row" id="head">
            <div class="col-md-4">
                <h3>New Download Category</h3>
            </div>
            <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                <a href="{{route('admin.categorydownload')}}"><button class="btn btn-success">All Category</button></a>
            </div>
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form class="addproduct" wire:submit.prevent="storeCategory">
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
                    <div class="col-md">
                        <input type="submit" value="Submit" class="btn btn-primary">
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
    .form-group{
        margin: 1% 0 1% 0;
    }
    .col-md-12 input {
        width:50%;
    }
</style>
