<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row" id="head">
            <div class="col-md-4">
                <h2><a href="{{route('admin.group')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  New Group</h2>
            </div>
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form class="addproduct" wire:submit.prevent="storeGroup">
            <div class="row mb-3">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Name"wire:model="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Group</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="group_id" wire:change="changeSeries">
                            <option value="">None</option>
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Series</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="serie_id" wire:change="changeType">
                            <option value="">None</option>
                            @foreach($series as $serie)
                                <option value="{{$serie->id}}">{{$serie->name}}</option>
                            @endforeach
                        </select>
                        <input type="text" class="form-control mt-2" placeholder="ID" wire:model="productserie_id">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Types</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="type_id">
                            <option value="">None</option>
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col">Jacket</label>
                    <div class="row justify-content-start">
                        <div class="col-md-2">
                            <select name="form-control input-md" wire:model="jacket_id">
                                <option value="">None</option>
                                @foreach($jacket_types as $jacket_type)
                                    <option value="{{$jacket_type->id}}">{{$jacket_type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" placeholder="ID" wire:model="productjacket_id">
                        </div>
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
        width:30%;
    }
</style>
