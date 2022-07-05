<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                <h1>All Slides</h1>
                            </div>
                            <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                                <a href="{{route('admin.addDealer')}}"><button class="btn btn-success">Add New Dealer</button></a>
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
                                    <th>ชื่อกิจการ</th>
                                    <th>Credit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($sliders as $slider) --}}
                                    <tr>
                                        <td>1</td>
                                        <td>Ablelink</td>
                                        <td>50000 บาท</td>
                                        <td>
                                            <a href="{{route('admin.editDealer')}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent=""><i class="bi bi-x" id="editsub"></i></a>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
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
        font-size: 30px;
        margin-left: 5%
    }
</style>

