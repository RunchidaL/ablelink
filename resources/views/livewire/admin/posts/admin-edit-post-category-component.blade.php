<div style="margin-left: 5%; margin-right: 5%">
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-6">
                <h2><a href="{{route('admin.post.category')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Post Category</h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updatePostCategory">
                            <div class="form-group">
                                <br>
                                <label class="col-md-4 control-label">Post Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Post Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name') <p class="text-danger">กรุณาใส่</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Post Category Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Post Category Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

