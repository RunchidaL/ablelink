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
            <h4><li>Create account</li></h4>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="Name">*Name</label>
                    <input type="text" name="Name" class="form-control" wire:model="name">
                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="Email">*Email</label>
                    <input type="text" name="Email" class="form-control" wire:model="email">
                    @error('email') <p class="text-danger">กรุณาใส่ E-mail</p> @enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="password">*Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" class="form-control" wire:model="password">
                        <i class="bi bi-eye-slash" id="eye"></i>
                    </div>
                    @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Submit</button>
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
