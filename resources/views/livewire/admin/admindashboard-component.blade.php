<div class="All">
    <div class="row">
        <div class="col-md-12 mb-3">
            </a><H1><b>Dashboard</b></H1>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.products')}}"><button class="button">Products</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.category')}}"><button class="button">Category</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.group')}}"><button class="button">Group Product</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.networktype')}}"><button class="button">Network type</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.Dealer')}}"><button class="button">Dealer</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.homes')}}"><button class="button">Home Highlight</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.download')}}"><button class="button">Download</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.brand')}}"><button class="button">Brand</button></a>
        </div>
        <div class="col-md-12">
            <a href="{{route('admin.post')}}"><button class="button">Post</button></a>
        </div>
    </div>
</div>

<style>
.All{
    background: #f1f1f1; 
    width: 50%; 
    display: block; 
    margin: auto; 
    border-radius: 20px
}
.row{
    text-align: center;
    margin-top: 5%;
    margin-bottom: 12%;
}
.col-md-12{ 
    margin-top: 3%;
    margin-bottom: 3%;
}
.col-md-12.mb-5{
    background: none;
}
.col-md-12.mb-3 h1{
    margin-top: 2%;
}
.button{
    border: none;
    box-shadow: 0 2px 5px rgba(136, 136, 136, 0.897);
    font-size: 16px;
    color: #FFF;
    padding: 8px 10px;
    width: 200px;
    background-color: #194276;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.button:hover{
    background: rgb(222, 226, 236);
    color: #194276;
}

@media(max-width: 1200px){
    .All{
        width: 90%; 
    }
}
@media(max-width: 670px){
    .col-md-12{
        margin: 5% 0;
    }
}
</style>