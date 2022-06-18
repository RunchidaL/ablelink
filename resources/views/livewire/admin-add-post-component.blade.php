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
                                    <select class="form-control form-control-sm" name="category" wire:model="category">
                                        <option>บทความ</option>
                                        <option>องค์กร</option>
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












{{-- <link href="/css/createblog.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">



<div class="container-fluid p-4">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <a href="/"><i class="bi bi-house-door"></i></a>
            <h1 class="text-black">Blog for Admin</h1>
            <form wire:submit.prevent="storepost" enctype="multipart/form-data" >
                @csrf
                <label for="">Title:</label>
                <input type="text" class="form-cont" name="title" wire:model="title"><br>

                <label for="">Title image:</label>
                <input type="file"  class="input-file" wire:model="titleimg"><br>
                
                @if($titleimg)
                    <img src="{{$titleimg->temporaryUrl()}}" width="120"/>
                @endif

                <label for="">Category:</label>
                <select class="form-control form-control-sm" name="category" wire:model="category">
                    <option>บทความ</option>
                    <option>องค์กร</option>
                </select>

                <label for="">Description:</label>
                <textarea name="description" id="description" cols="30" rows="10" wire:model="description"></textarea>
                <br>
                <button type="submit" class="btn btn-lg ">Submit</button>
            </form>
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
@endpush --}}
