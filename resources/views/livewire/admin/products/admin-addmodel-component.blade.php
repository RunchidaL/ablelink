<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row" id="head">
                            <div class="col-md-4">
                                <h2><a href="{{route('admin.products')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add New Model</h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-panel" enctype='multipart/form-data' wire:submit.prevent="addModel"> @csrf
                            <div class="form-group">
                                <label class="col-md-12">*Model Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name">
                                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label class="col-md-12">*Nick Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="nickname" placeholder="ชื่อเล่น">
                                    @error('nickname') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label class="col-md-12">*Part Number</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug" placeholder="Part Number">
                                    @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Description</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="description" type="text" class="form-control" wire:model="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Specification</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="overview" type="text" class="form-control" wire:model="overview"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Solution</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="application" type="text" class="form-control"  wire:model="application"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Feature</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="feature" type="text" class="form-control"  wire:model="feature"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image" accept=".jpg,.jpeg,.png">
                                    @if($errors->has('image'))
                                        @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                                    @elseif($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Product Gallery</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="p_images" accept=".jpg,.jpeg,.png" multiple>
                                    @if($p_images)
                                        @foreach($p_images as $images)
                                            <img src="{{$images->temporaryUrl()}}" width="120"/>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Datasheet</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="datasheet" accept=".pdf">
                                    @error('datasheet') <p class="text-danger">กรุณาใส่ไฟล์ pdf</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Guide</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="guide" accept=".pdf">
                                    @error('guide') <p class="text-danger">กรุณาใส่ไฟล์ pdf</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Certificate</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="cert" accept=".pdf">
                                    @error('cert') <p class="text-danger">กรุณาใส่ไฟล์ pdf</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Config</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="config" accept=".pdf">
                                    @error('config') <p class="text-danger">กรุณาใส่ไฟล์ pdf</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Firm ware</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" wire:model="firmware">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6">Videos (ถ้าต้องการใส่หลาย Video ให้พิมพ์ , ก่อนแล้วตามด้วย Link Video ถัดไป)</label>
                                <textarea cols="100" rows="5" wire:model="videos"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Web price</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="web_price">
                                        <option value="">Select Show or Hide</option>
                                        <option value="0">Show</option>
                                        <option value="1">Hide</option>
                                    </select>
                                    @error('web_price') <p class="text-danger">กรุณาเลือก</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Dealer price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="dealer_price">
                                    @error('dealer_price') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Customer price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="customer_price">
                                    @error('customer_price') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Stock</label>   
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="stock">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Product</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" list="datalistOptions" wire:model="product_id" placeholder="ID Product">
                                    @error('product_id') <p class="text-danger">{{ $message }}</p> @enderror
                                    <datalist id="datalistOptions">
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}} {{$product->brand->brands->name}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Group Product</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="group_products" wire:change="changeSeries">
                                        <option value="">Select Group</option>
                                        @foreach($groups as $group)
                                            <option value="{{$group->id}}">{{$group->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('group_products') <p class="text-danger">กรุณาเลือก</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Series</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="series_id" wire:change="changeType">
                                        <option value="0">Select Series</option>
                                        @foreach($series as $serie)
                                            <option value="{{$serie->id}}">{{$serie->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Type</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="type_id">
                                        <option value="0">Select Type</option>
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Jacket Type</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="jacket_id">
                                        <option value="0">Select Jacket Type</option>
                                        @foreach($jackets as $jacket)
                                            <option value="{{$jacket->id}}">{{$jacket->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="file" class="btn btn-success my-4">Submit</button>
                                </div>
                            </div>
                        </form>
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const descriptionSummernote = $('#description');
    const overviewSummernote = $('#overview');
    const applicationSummernote = $('#application');
    const featureSummernote = $('#feature');
    function uploadFiledes(file, summernoteInstance) {
        const formData = new FormData();
        formData.append('file', file);
        $.ajax({
            type: 'POST',
            url: '/admin/upload/imagedes',
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
    function uploadFileover(file, summernoteInstance) {
        const formData = new FormData();
        formData.append('file', file);
        $.ajax({
            type: 'POST',
            url: '/admin/upload/imageover',
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
    overviewSummernote.summernote({
        height: 200,
        callbacks: {
            onImageUpload: function(files) {
                uploadFileover(files[0], overviewSummernote);
            },
            onChange: function(contents2, $editable) {
                @this.set('overview', contents2);
            }
        }
    });
    function uploadFileapp(file, summernoteInstance) {
        const formData = new FormData();
        formData.append('file', file);
        $.ajax({
            type: 'POST',
            url: '/admin/upload/imageapp',
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
    applicationSummernote.summernote({
        height: 200,
        callbacks: {
            onImageUpload: function(files) {
                uploadFileapp(files[0], applicationSummernote);
            },
            onChange: function(contents3, $editable) {
                @this.set('application', contents3);
            }
        }
    });
    function uploadFilefea(file, summernoteInstance) {
        const formData = new FormData();
        formData.append('file', file);
        $.ajax({
            type: 'POST',
            url: '/admin/upload/imagefea',
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
    featureSummernote.summernote({
        height: 200,
        callbacks: {
            onImageUpload: function(files) {
                uploadFilefea(files[0], featureSummernote);
            },
            onChange: function(contents4, $editable) {
                @this.set('feature', contents4);
            }
        }
    });
</script>


