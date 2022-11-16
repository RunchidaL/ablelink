<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12" id="head">
                                <h2><a href="{{route('admin.post')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add Post</h2>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="addPost">
                            <div class="form-group">
                                <label class="col-md-12">Title : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="title" wire:keyup="generateSlug">
                                    @error('title') <p class="text-danger">กรุณาใส่</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">slug : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug">
                                    @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Title Image : </label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="titleimg" accept=".jpg,.jpeg,.png">
                                    @error('titleimg') <p class="text-danger">กรุณาใส่</p> @enderror
                                    @if($titleimg)
                                        <img src="{{$titleimg->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2">Category : </label>
                                <div class="col-md-2">
                                    <select class="form-control form-control-sm" name="category" wire:model="category_id">
                                        <option value="">--Select--</option>
                                        @foreach ($postcategories as $postcategory)
                                            <option value="{{$postcategory->id}}">{{$postcategory->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">กรุณาใส่</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Description : </label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="description" type="text" class="form-control" wire:model="description"></textarea>
                                </div>
                                @error('description') <p class="text-danger">กรุณาใส่</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12"></label>
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

<script>
$('#description').summernote({
        height: 200,
        callbacks: {
            onChange: function(contents, $editable) {
                @this.set('description', contents);
            }
        }
    });
</script>
