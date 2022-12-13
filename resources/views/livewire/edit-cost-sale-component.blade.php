<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1><a href="{{route('admin.editDealer',['infodealer_id'=>$id->dealerid])}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a> Sale History ของบริษัท {{$id->companyTH}}</h1>
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
                                    <th>ยอด</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dealers->where('user_id',$id->dealerid) as $dealer)
                                    <tr>
                                        <td>{{number_format($dealer->cost,2)}}</td>
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCost({{$dealer->id}})"><i class="bi bi-x" id="editsub"></i></a>
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
</style>


