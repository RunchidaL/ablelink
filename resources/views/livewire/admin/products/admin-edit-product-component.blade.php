<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row" id="head">
                            <div class="col-md-4">
                                <h2><a href="{{route('admin.products')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Product</h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label class="col-md-12">Product Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product Slug</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control"  wire:model="slug">
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
                                    <input type="text" class="form-control" wire:model="dealer_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Customer price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="customer_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Stock</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="stock">
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
                                <label class="col-md-4">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">SubCategory</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="scategory_id">
                                        <option value="0">Select subategory</option>
                                        @foreach($scategories as $scategory)
                                            <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Group Product</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="groupproduct_id">
                                        <option value="">Select Series</option>
                                        @foreach($groups as $group)
                                            <option value="{{$group->id}}">{{$group->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Network Type</label>
                                <div class="row justify-content-start">
                                    <div class="col-4">
                                        <select class="form-control input-md" wire:model="attr">
                                            <option value="0">Select Network Type</option>
                                            @foreach($network_types as $network_type)
                                                <option value="{{$network_type->id}}">{{$network_type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" id="add" class="btn btn-primary" wire:click.prevent="add">Add product</button>
                                    </div>
                                </div>
                            </div>
                            @foreach($inputs as $key => $value)
                            <div class="form-group">
                                <label class="col-md-4 my-2">{{$network_types->where('id',$attribute_arr[$key])->first()->name}}</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="network_images.{{$value}}">
                                    @if($network_images)
                                        @foreach($network_images as $network_image)
                                            <img src="{{$network_image->temporaryUrl()}}" width="120"/>
                                        @endforeach
                                    @endif
                                </div>
                                <input type="text" class="input-file" wire:model="attribute_values.{{$value}}">
                                <button type="submit" class="btn btn-danger" wire:click.prevent="remove({{$key}})">Remove</button>
                            </div>
                            @endforeach
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success my-4">Update</button>
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



