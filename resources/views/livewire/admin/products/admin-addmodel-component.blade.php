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
                                    <input type="text" class="form-control" wire:model="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">*Model Slug</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug" placeholder="Part Number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Description</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="description" type="text" class="form-control" wire:model="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">*Overview</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="overview" type="text" class="form-control" wire:model="overview"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">*Application</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="application" type="text" class="form-control"  wire:model="application"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">*Item_spotlight</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="item_spotlight" type="text" class="form-control"  wire:model="item_spotlight"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">*Feature</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="feature" type="text" class="form-control"  wire:model="feature"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Product Gallery</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="p_images" multiple>
                                    @if($p_images)
                                        @foreach($p_images as $image)
                                            <img src="{{$image->temporaryUrl()}}" width="120"/>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Datasheet</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="datasheet">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Firm ware</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="firmware">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Guide</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="guide">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Certificate</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="cert">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Config</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="config">
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
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Dealer price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="dealer_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Customer price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="customer_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Stock</label>   
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="stock" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Product</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" list="datalistOptions" wire:model="product_id" placeholder="ID Product" required>
                                    <datalist id="datalistOptions">
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">*Group Product</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="group_products" wire:change="changeSeries">
                                        <option value="">Select Group</option>
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
                                            <option value="{{$jacket->id}}">{{$jacket->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                
                            <div class="form-group">
                                <label class="col-md-6">Network Type (กรุณา Select Network Type ก่อน Add product)</label>
                                <div class="row justify-content-start">
                                    <div class="col-4">
                                        <select class="form-control" wire:model="attr">
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
                                <label class="col-md-4">{{$network_types->where('id',$attribute_arr[$key])->first()->name}}</label>
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

