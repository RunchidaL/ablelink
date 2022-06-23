<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row" id="head">
                            <div class="col-md-4">
                                <h3>Add New Download</h3>
                            </div>
                            <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                                <a href="{{route('admin.download')}}"><button class="btn btn-success">All Download</button></a>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="addDownload">
                            <div class="form-group">
                                <label class="col-md-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">slug</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">File</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="file" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Category</label>
                                <div class="col-md-12">
                                    <select class="form-control form-control-sm" name="category" wire:model="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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

