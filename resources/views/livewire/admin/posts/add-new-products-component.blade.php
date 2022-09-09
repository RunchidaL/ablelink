<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12" id="head">
                                <a href="{{route('admin.AdminNewProducts')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  AddNewProducts
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">
                        <form class="form-panel" enctype="multipart/form-data" wire:submit.prevent="addNewProduct">
                            <div class="form-group">
                                <label class="col-md-12">Name : </label>
                                <div class="col-md-12 mt-2">
                                    <input type="text" class="form-control" wire:model="name"  required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Image(link) : </label>
                                <div class="col-md-12 mt-2">
                                    <input type="text" class="form-control" wire:model="img" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product(link) : </label>
                                <div class="col-md-12 mt-2">
                                    <input type="text" class="form-control" wire:model="linkproduct" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">BrandID : </label>
                                <select name="" id="" wire:model="brand_id" required>
                                    <option value="">Select</option>
                                    @foreach ($brand as $brands)
                                    <option value="{{$brands->id}}">{{$brands->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #head{
        font-size: 30px;
    }
    .col-md-12{
        font-size: 15px;
        background: rgb(243, 243, 243);
        border-radius: 20px;
    }
    
    .panel-heading.head{
        font-size: 50px;
    }
    .panel-body{
        margin: 2% 5% 2% 5%;
    }
    .row{
        margin: 25px;
    }
    button{
        margin-top: 2%
    }
    .form-group{
        margin-bottom: 2%
    }
</style>


