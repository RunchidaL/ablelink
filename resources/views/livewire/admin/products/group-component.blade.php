<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" id="head">
                    <div class="col-md-4">
                        <h2><a href="{{route('admin.products')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Group Product</h2>
                    </div>
                    <div class="col-md-4 gap-2 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.addgroup')}}"><button class="btn btn-success">Add group</button></a>
                    </div>
                </div>
                <table class="table table-striped">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Types</th>
                            <th>Jacket Types</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groups as $group)
                            <tr>
                                <td>{{$group->id}}</td>
                                <td class="product-name">{{$group->name}}</td>
                                <td class="series">
                                    <ul class="slist">
                                        @foreach($group->product_series as $group_ser)
                                            <li>{{$group_ser->name}}
                                                <a href="{{route('admin.editgroup',['group_id'=>$group->id,'serie_id'=>$group_ser->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                                <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSeries({{$group_ser->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                            </li>
                                            @foreach($group_ser->typemodels as $type)
                                                <br>
                                                @foreach($type->jackets as $jacket)
                                                <br>
                                                @endforeach
                                            @endforeach
                                            <div id="line"></div>
                                        @endforeach
                                    </ul> 
                                </td>
                                <td class="types">
                                    <ul class="slist">
                                        @foreach($group->product_series as $group_ser)
                                        <br>
                                            @foreach($group_ser->typemodels as $type)
                                                <li>{{$type->name}}
                                                    <a href="{{route('admin.editgroup',['group_id'=>$group->id,'serie_id'=>$group_ser->id,'type_id'=>$type->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteType({{$type->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                                </li>
                                                @foreach($type->jackets as $jacket)
                                                <br>
                                                @endforeach
                                            @endforeach
                                            <div id="line"></div>
                                        @endforeach
                                    </ul> 
                                </td>
                                <td class="types">
                                    <ul class="slist">
                                        @foreach($group->product_series as $group_ser)
                                        <br>
                                            @foreach($group_ser->typemodels as $type)
                                            <br>
                                                @foreach($type->jackets as $jacket)
                                                    <li>{{$jacket->jacket_type->name}}
                                                        <a href="{{route('admin.editgroup',['group_id'=>$group->id,'serie_id'=>$group_ser->id,'type_id'=>$type->id,'jacket_id'=>$jacket->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                                        <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteJacket({{$jacket->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                                    </li>
                                                @endforeach
                                            @endforeach
                                            <div id="line"></div>
                                        @endforeach
                                        
                                    </ul> 
                                </td>
                                <td>
                                    <a href="{{route('admin.editgroup',['group_id'=>$group->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteGroup({{$group->id}})"><i class="bi bi-x" id="editsub"></i></a>
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
    .slist li{
        font-size: 14px;
        
    }
    #line{
        border-bottom: 1px solid ;
        margin: 5px 0 5px 0;
        border-bottom-color: #CAC6C6;
    }

</style>
