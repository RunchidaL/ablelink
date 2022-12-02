<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row" id="head">
                        <div class="col-md-4">
                            <h1><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a> Download</h1>
                        </div>
                        <div class="col-md-4 gap-2 offset-md-4 d-md-flex justify-content-md-end">
                            <a href="{{route('admin.categorydownload')}}"><button class="btn btn-success">Download Category</button></a>
                            <a href="{{route('admin.adddownload')}}"><button class="btn btn-success">Add Download</button></a>
                        </div>
                        <div class="col offset-md-8 d-md-flex justify-content-md-end">
                            <select style="min-width:90px" wire:model="category">
                                <option value="default" selected="selected">ทั้งหมด</option>
                                <option value="1">Catelog</option>
                                <option value="2">Presentation</option>
                                <option value="3">Marketing Videos</option>
                            </select>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>File</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($downloads as $download)
                                    <tr>
                                        <td>{{$download->id}}</td>
                                        <td>{{$download->name}}</td>
                                        <td>{{$download->file}}</td>
                                        <td>{{$download->category->name}}</td>
                                        <td>{{$download->brand->name}}</td>
                                        <td>
                                            <a href="{{route('admin.editdownload',['download_id'=>$download->id])}}"><i class="bi bi-pencil-square" id="edit"></i></a>
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteDownload({{$download->id}})"><i class="bi bi-x" id="edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$downloads->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<style>
    #edit{
        color:black;
        font-size: 25px;
    }
</style>

