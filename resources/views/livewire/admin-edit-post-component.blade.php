<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#"><button>Edit Posts</button></a>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="updatePost">
                            <div class="form-group">
                                <label class="col-md-12">title</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="title" wire:keyup="generateSlug" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">slug</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Title Image</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="newtitleimg">
                                    @if($newtitleimg)
                                        <img src="{{$newtitleimg->temporaryUrl()}}" width="120"/>
                                    @else
                                        <img src="{{asset('images/posts')}}/{{$titleimg}}" width="120"alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Category</label>
                                <div class="col-md-12">
                                    <select class="form-control form-control-sm" name="category" wire:model="category_id">
                                        <option value="1">บทความ</option>
                                        <option value="2">องค์กร</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Description</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="description" type="text" class="form-control" wire:model="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
    tinymce.init({
            selector: '#description',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var d_data = $('#description').val();
                    @this.set('description',d_data);
                });
            }
        });
</script>
@endpush

