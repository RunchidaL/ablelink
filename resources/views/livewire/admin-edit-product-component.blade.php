<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit New Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}"><button>All Products</button></a>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label class="col-md-4">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Product Slug</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control"  wire:model="slug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">overview</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea id="overview" type="text" class="form-control"  wire:model="overview"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Application</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea id="application" type="text" class="form-control"  wire:model="application"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Network_connectivity</label>
                                <div class="col-md-4" wire:ignore> 
                                    <textarea id="network_connectivity" type="text" class="form-control"  wire:model="network_connectivity"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Item_spotlight</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea id="item_spotlight" type="text" class="form-control"  wire:model="item_spotlight"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Feature</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea id="feature" type="text" class="form-control"  wire:model="feature"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Web price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" wire:model="web_price">
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
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
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
                                <label class="col-md-4">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
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


