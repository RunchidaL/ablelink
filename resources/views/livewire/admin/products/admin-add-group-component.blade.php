<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row" id="head">
            <div class="col-md-4">
                <h2><a href="{{route('admin.group')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  New Group</h2>
            </div>
        </div>

        <h5>กรุณาเลือกหมวดหมู่ที่ต้องการ</h5>
        <input type="radio" id="group" name="addgroup" value="group" wire:model="addgroup">
        <label for="group">Group</label>
        <input type="radio" id="series" name="addgroup" value="series" wire:model="addgroup">
        <label for="series">Series</label>
        <input type="radio" id="type" name="addgroup" value="type" wire:model="addgroup">
        <label for="type">Type</label>
        <input type="radio" id="jtype" name="addgroup" value="jtype" wire:model="addgroup">
        <label for="jtype">Jacket Type</label>

        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form class="addproduct" wire:submit.prevent="storeGroup">
            <div class="row mb-3">
                @if($addgroup)
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Name"wire:model="name">
                        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                @if($addgroup != 'group')
                <div class="form-group">
                    <label class="col-md-12">Group</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="group_id" wire:change="changeSeries">
                            <option value="">None</option>
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>
                        @error('group_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                    </div>
                </div>
                @endif
                @if($addgroup != 'group' and $addgroup != 'series')
                <div class="form-group">
                    <label class="col-md-12">Series</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="serie_id" wire:change="changeType">
                            <option value="">None</option>
                            @foreach($series as $serie)
                                <option value="{{$serie->id}}">{{$serie->name}}</option>
                            @endforeach
                        </select>
                        @error('serie_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                    </div>
                </div>
                @endif
                @if($addgroup != 'group' and $addgroup != 'series' and $addgroup != 'type' )
                <div class="form-group">
                    <label class="col-md-12">Types</label>
                    <div class="col-md-12">
                        <select name="form-control input-md" wire:model="type_id">
                            <option value="">None</option>
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        @error('type_id') <p class="text-danger">กรุณาเลือก</p> @enderror
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <div class="col-md">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>    
                </div>
                @endif
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