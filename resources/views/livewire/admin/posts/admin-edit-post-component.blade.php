<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12" id="head">
                                <h2><a href="{{route('admin.post')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Posts</h2>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="updatePost">
                            <div class="form-group">
                                <label class="col-md-12">Title(ใส่ไฟล์ขนาดไม่เกิน 12 MB) : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="title" wire:keyup="generateSlug">
                                    @error('title') <p class="text-danger">กรุณาใส่</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">slug : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug" >
                                    @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Title Image : </label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="newtitleimg" accept=".jpg,.jpeg,.png">
                                    @if($errors->has('newtitleimg'))
                                        @error('newtitleimg') <p class="text-danger">{{ $message }}</p> @enderror
                                    @elseif($newtitleimg)
                                        <img src="{{$newtitleimg->temporaryUrl()}}" width="120"/>
                                    @else
                                        <img src="{{asset('images/posts')}}/{{$titleimg}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Category : </label>
                                <div class="col-md-12">
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
                                    <textarea id="description" type="text" class="form-control" wire:model="description">{{ $post->description }}</textarea>
                                </div>
                                @error('description') <p class="text-danger">กรุณาใส่</p> @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12"></label>
                                <div class="col-md-12">
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

<script>
    const descriptionSummernote = $('#description');
    function uploadFiledes(file, summernoteInstance) {
        const formData = new FormData();
        formData.append('file', file);
        $.ajax({
            type: 'POST',
            url: '/admin/upload/imagedescription',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            contentType: false,
            processData: false,
            data: formData,
        }).done((response) => {
            const image = document.createElement('img');
            image.classList.add('summernote');
            image.setAttribute('src', response.url);
            summernoteInstance.summernote('insertNode', image);
        });
    }
    descriptionSummernote.summernote({
        toolbar: [
            ['style', ['style']],
            ['fontsize', ['fontsize']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['picture']],
        ],
        height: 200,
        callbacks: {
            onImageUpload: function(files) {
                uploadFiledes(files[0], descriptionSummernote);
            },
            onChange: function(contents1, $editable) {
                @this.set('description', contents1);
            }
        }
    });
</script>


