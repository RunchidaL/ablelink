<!-- link -->
<link href="/css/activity.css" rel="stylesheet">
<!-- link -->

<div class="menu-activity">
    <div class="mac-left">
        <a href="/post_category/บทความ"><i class="bi bi-file-text"></i></a>
        <p class="text-icon">บทความ</p>
    </div>
    <div class="mac-center">
        <a href="{{route('newproducts')}}"><i class="bi bi-box-seam"></i></a>
        <p>ผลิตภัณฑ์</p>
    </div>
    <div class="mac-right">
        <a href="/post_category/องค์กร"><i class="bi bi-building"></i></a>
        <p class="text-icon">องค์กร</p>
    </div>
</div>

<h1 style="text-align: center; margin-bottom: 1%; background: #194276; color: white; padding: 1% 0;">ผลิตภัณฑ์ใหม่</h1>

<div class="brand">
    <img src="/images/brand 4.png">
</div>

<div class="date">
    <h1><i class="bi bi-calendar4-week"></i> สิงหาคม</h1>
</div>

<div class="all">
    <div class="card mb-3" style="background: #f1f1f1">
        <div class="row">
            <div class="col-md-4">
                <div class="product">
                    <img class="imgproduct" src="images/CCTV.png">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, unde.</h5>
                    <div class="button">
                        <button class="btn btn-info">ดูเพิ่มเติม >></button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


<style>
    .brand{
        text-align: center
    }
    .brand img{
        width: 25%;
    }
    .date{
        margin-left: 5%;
    }
    .all{
        margin: 1% 20%;
    }
    .product{
        margin: 5%;
        background: #ffffff; border-radius:20px; box-shadow: 0 3px 7px rgb(153, 153, 153);
      
    }
    .imgproduct{
        width: 50%; 
        display: block; 
        margin: auto;
    }
    .button{
        text-align: end; 
        margin-top: 12%
    }
    .btn.btn-info{
        color: #ffffff;
        background: #194276;
    }

@media(max-width: 900px){
    .all{
        margin: 5% 5%;
    }
    .brand img{
        width: 50%;
    }
}
    
</style>