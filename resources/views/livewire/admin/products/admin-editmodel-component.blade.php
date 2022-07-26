<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row" id="head">
                            <div class="col-md-4">
                                <h2><a href="{{route('admin.products')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Model</h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-panel" enctype='multipart/form-data' wire:submit.prevent="updateModel"> @csrf
                            <div class="form-group">
                                <label class="col-md-12">Model Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Model Slug</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Description</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="description" type="text" class="form-control" wire:model="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">overview</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="overview" type="text" class="form-control"  wire:model="overview"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Application</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="application" type="text" class="form-control"  wire:model="application"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Item_spotlight</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="item_spotlight" type="text" class="form-control"  wire:model="item_spotlight"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Feature</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="feature" type="text" class="form-control"  wire:model="feature"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newimage">
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120"/>
                                    @else
                                        <img src="{{asset('images/products')}}/{{$image}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Product Gallery</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newimages" multiple>
                                    @if($newimages)
                                        @foreach($newimages as $newimage)
                                            @if($newimage)
                                                <img src="{{$newimage->temporaryUrl()}}" width="120"/>
                                            @endif
                                        @endforeach
                                    @else
                                        @foreach($pimages as $pimage)
                                            @if($pimage)
                                                <img src="{{url('images/products')}}/{{$pimage}}" width="120"/>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Videos</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newvideos" multiple>
                                    @if($newvideos)
                                        @foreach($newvideos as $newvideo)
                                            @if($newvideo)
                                                <iframe src="{{$newvideo->temporaryUrl()}}" width="120"></iframe>
                                            @endif
                                        @endforeach
                                    @else
                                        @foreach($videos as $video)
                                            @if($video)
                                                <iframe src="{{url('images/products')}}/{{$video}}" width="120"></iframe>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Web price</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="web_price">
                                        <option value="0">Show</option>
                                        <option value="1">Hide</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Dealer price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="dealer_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Customer price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="customer_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Stock</label>   
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="stock" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">datasheet</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newdatasheet">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">firmware</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newfirmware">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">guide</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newguide">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">cert</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newcert">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">config</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newconfig">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Product</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="product_id" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Group Product</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="group_products" wire:change="changeSeries">
                                        <option value="">Select Series</option>
                                        @foreach($groups as $group)
                                            <option value="{{$group->id}}">{{$group->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Series</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="series_id" wire:change="changeType">
                                        <option value="">Select Series</option>
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
                                            <option value="{{$jacket->id}}">{{$jacket->jacket_type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="file" class="btn btn-success my-4">Update</button>
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

@push('scripts')
    <script>
        tinymce.init({
            selector: '#description',
            plugins: ['quickbars table image link lists media autoresize help',
            'searchreplace visualblocks code fullscreen'],
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var d_data = $('#description').val();
                    @this.set('description',d_data);
                });
            }
        });
        tinymce.init({
            selector: '#overview',
            plugins: ['quickbars table image link lists media autoresize help',
            'searchreplace visualblocks code fullscreen'],
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var o_data = $('#overview').val();
                    @this.set('overview',o_data);
                });
            }
            
        });
        tinymce.init({
            selector: '#application',
            plugins: ['quickbars table image link lists media autoresize help',
            'searchreplace visualblocks code fullscreen'],
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var sd_data = $('#application').val();
                    @this.set('application',sd_data);
                });
            }
        });
        tinymce.init({
            selector: '#item_spotlight',
            plugins: ['quickbars table image link lists media autoresize help',
            'searchreplace visualblocks code fullscreen'],
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var i_data = $('#item_spotlight').val();
                    @this.set('item_spotlight',i_data);
                });
            }
        });
        tinymce.init({
            selector: '#feature',
            plugins: ['quickbars table image link lists media autoresize help',
            'searchreplace visualblocks code fullscreen'],
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var f_data = $('#feature').val();
                    @this.set('feature',f_data);
                });
            }
        });
    </script>
@endpush

