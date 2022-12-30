<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                <h1><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a> Product Preview</h1>
                            </div>
                            <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                                <a href="{{route('admin.addproductpreview')}}"><button class="btn btn-success">Add New Product Preview</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($previews as $preview)
                                    <tr>
                                        @if(empty($preview->product->id))
                                        <td></td>
                                        <td>สินค้าไม่อยู่ในระบบ กรุณาลบ</td>
                                        <td></td>
                                        <td>
                                        <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deletePreview({{$preview->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                        </td>
                                        @else
                                        <td>{{$preview->categories->name}}</td>
                                        <td><img src="{{asset('/images/products')}}/{{$preview->product->image}}" width="120" alt=""></td>
                                        <td>{{$preview->product->slug}}</td>
                                        <td>
                                            <a href="{{route('admin.editproductpreview',['preview_id'=>$preview->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deletePreview({{$preview->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    #editsub{
        color:black;
        font-size: 25px;
        margin-left: 5%
    }
    .subtitle-name{
        width:30%;
    }
</style>


@push('scripts')
<script>
    window.addEventListener('show-delete-confirmation', event =>{
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
        })
    });

    window.addEventListener('deletedSlider', event =>{
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
    });
</script>
@endpush
