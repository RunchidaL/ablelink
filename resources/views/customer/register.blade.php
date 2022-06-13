@extends('layout.link')

@section('link_register_customer')
    <link href="/css/customer/register.css" rel="stylesheet">
@endsection

@section('register_customer')
    <body>
    <nav class="navbar navbar-expand-lg">
        <img src="/images/logoAbleLink.png" alt="logo">
        <a>| Create an account</a>
    </nav>

    <div class="container mt-1 p-2 d-flex justify-content-center">
        <form action="{{route('send.email')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="name">*ชื่อจริง</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="lname">*นามสกุล</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="email">*Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="phone">*เบอร์โทรศัพท์</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>                
                <input type="submit" value="Create an account" class="btn btn mx-auto">
            </div>
        </form>
    </div>
    <div class="signin">
        <p>Already have an account?<a href="/"> Sign In</a></p>
        <p><i class="bi bi-dash"></i>or create a dealer<i class="bi bi-dash"></i></p>
        <button>Dealer account</button>
    </div>

@endsection

