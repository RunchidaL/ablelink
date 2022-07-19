<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" id="head">
                    <div class="col-md-4">
                        <h2><a href="{{route('admin.group')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  All Network Type</h2>
                    </div>
                    <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.addnetworktype')}}"><button class="btn btn-success">Add New Network Type</button></a>
                    </div>
                </div>
                <table class="table table-striped">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($networks as $network)
                            <tr>
                                <td>{{$network->id}}</td>
                                <td>{{$network->name}}</td>
                                <td>
                                    <a href="{{route('admin.editnetworktype',['network_id'=>$network->id])}}"><i class="bi bi-pencil-square" id="edit"></i></a>
                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteType({{$network->id}})"><i class="bi bi-x" id="edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>


<style>
    #head{
        margin: 2% 0 2% 0;
    }
    #edit{
        color:black;
        font-size: 25px;
    }
    #editsub{
        color:black;
        font-size: 15px;
    }
</style>
