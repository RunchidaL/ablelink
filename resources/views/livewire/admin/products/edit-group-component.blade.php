<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row" id="head">
            <div class="col-md-4">
                @if(empty($serie_id) and empty($type_id) and empty($jacket_id))
                <h2><a href="{{route('admin.group')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Group</h2>
                @elseif(empty($type_id) and empty($jacket_id))
                <h2><a href="{{route('admin.group')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Serie</h2>
                @elseif(empty($jacket_id))
                <h2><a href="{{route('admin.group')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Type</h2>
                @else
                <h2><a href="{{route('admin.group')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Edit Jacket Type</h2>
                @endif
            </div>
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form class="addproduct" wire:submit.prevent="updateGroup">
            <div class="row mb-3">
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-12">Name</label>
                        <input type="text" class="form-control" placeholder="Name"wire:model="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md">
                        <input type="submit" value="Update" class="btn btn-success">
                    </div>    
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    #head{
        margin: 2% 0 2% 0;
    }
    .form-group{
        margin: 1% 0 1% 0;
    }
    .col-md-12 input {
        width:30%;
    }
</style>