{{-- link --}}
{{-- <link href="/css/dealer/register.css" rel="stylesheet"> --}}
{{-- link --}}

<div class="container mt-1 p-5">
    <h2><a href="{{route('admin.Dealer')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add New Dealer</h2>
    <br>
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif
    <form enctype="multipart/form-data" wire:submit.prevent="addDealer">
        @csrf
        <div class="row">
            <h4><li>Create account</li></h4>
            <div class="col-md-max mb-3">
                <div class="form-group">
                    <label for="Name">*Name</label>
                    <input type="text" name="Name" class="form-control" wire:model="name" required>
                </div>
            </div>
            <div class="col-md-max mb-3">
                <div class="form-group">
                    <label for="Email">*Email</label>
                    <input type="text" name="Email" class="form-control" wire:model="email" required>
                </div>
            </div>
            <div class="col-md-max mb-3">
                <div class="form-group">
                    <label for="password">*Password</label>
                    <input type="password" name="password" class="form-control" wire:model="password" required>
                </div>
            </div>
            
            <div class="form-group" style="text-align: center">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
