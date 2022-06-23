<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row" id="head">
                            <div class="col-md-4">
                                <h2><a href="{{route('admin.products')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add New Product</h2>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-12">Product Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product Slug</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="slug" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">overview</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="overview" type="text" class="form-control" wire:model="overview"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Application</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="application" type="text" class="form-control"  wire:model="application"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Network_connectivity</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea id="network_connectivity" type="text" class="form-control"  wire:model="network_connectivity"></textarea>
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
                                <label class="col-md-12">Web price</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="web_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Dealer price</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="dealer_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Customer price</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" wire:model="customer_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Stock</label>
                                    <input type="text" class="form-control" wire:model="stock" required>
                                <div class="col-md-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product Image</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Datasheet</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="datasheet">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Firm ware</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="firmware">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Guide</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="guide">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Certificate</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="cert">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Config</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="config">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Category</label>
                                <div class="col-md-12">
                                    <select class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">SubCategory</label>
                                <div class="col-md-12">
                                    <select class="form-control" wire:model="scategory_id">
                                        <option value="0">Select subategory</option>
                                        @foreach($scategories as $scategory)
                                            <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                        @endforeach
                                    </select>
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
            selector: '#overview',
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
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var sd_data = $('#application').val();
                    @this.set('application',sd_data);
                });
            }
        });
        tinymce.init({
            selector: '#network_connectivity',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var n_data = $('#network_connectivity').val();
                    @this.set('network_connectivity',n_data);
                });
            }
        });
        tinymce.init({
            selector: '#item_spotlight',
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

<!-- <style>
    #head{
        margin: 2% 0 2% 0;
    }
    .form-group{
        margin: 2% 0 2% 0;
    }
</style> -->