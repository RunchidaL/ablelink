<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                Add Post
                            </div>
                            <div class="col-md-12">
                                <a href="#"><button>All Posts</button></a>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="addPost">
                            <div class="form-group">
                                <label class="col-md-12">title</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="title" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Title Image</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="titleimg">
                                    @if($titleimg)
                                        <img src="{{$titleimg->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Category</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="category" required>
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

