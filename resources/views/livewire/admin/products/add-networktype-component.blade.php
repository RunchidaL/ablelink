<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row" id="head">
            <div class="col-md-4">
                <h2><a href="{{route('admin.networktype')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  New Network Type</h2>
            </div>
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form class="addproduct" wire:submit.prevent="storeNetwork">
            <div class="row mb-3">
                <div class="form-group">
                    <label class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" wire:model="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md">
                        <input type="submit" value="Submit" class="btn btn-success">
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
        width:50%;
    }
</style>