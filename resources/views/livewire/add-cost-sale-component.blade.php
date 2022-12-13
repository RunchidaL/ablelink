<div class="container mt-1 p-5">
    <h2><a href="{{route('admin.Dealer')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  Add Cost</h2>
    <br>
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif
    <form enctype="multipart/form-data" wire:submit.prevent="addCost">
        @csrf
            <h4><li>Add Cost</li></h4>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="cost">*Cost</label>
                    <input type="text" name="cost" class="form-control" wire:model="cost">
                    @error('cost') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="dealerid">*Dealer_ID</label>
                    <input type="text" name="dealerid" class="form-control" list="datalistOptions"  wire:model="dealerid">
                    <datalist id="datalistOptions">
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </datalist>
                    @error('dealerid') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                </div>
            </div>
    </form>
</div>

<script>
const passwordField = document.querySelector("#password");
const eyeIcon= document.querySelector("#eye");
eyeIcon.addEventListener("click", function(){
  this.classList.toggle("bi-eye");
  const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", type);
})
</script>

<style>
.password-container{
  position: relative;
}
.bi-eye, .bi-eye-slash{
  position: absolute;
  top: 20%;
  right: 15px;
  cursor: pointer;
}
</style>

