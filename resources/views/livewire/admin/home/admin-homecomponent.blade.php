<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                <h1><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a> All Slides</h1>
                            </div>
                            <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                                <a href="{{route('admin.addhomes')}}"><button class="btn btn-success">Add New Slide</button></a>
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{$slider->id}}</td>
                                        <td><img src="{{asset('/images/sliders')}}/{{$slider->image}}" width="120" alt=""></td>
                                        <td>{{$slider->title}}</td>
                                        <td class="subtitle-name">{{$slider->subtitle}}</td>
                                        <td>{{$slider->link}}</td>
                                        <td>{{$slider->status == 0 ? 'Active':'Inactive'}}</td>
                                        <td>{{$slider->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.edithomes',['slide_id'=>$slider->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                            <a href="#" wire:click.prevent="deleteSlides({{$slider->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                        </td>
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
