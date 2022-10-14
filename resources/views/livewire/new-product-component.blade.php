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

<div class="row" id="products">
    @foreach($NewProduct->unique('brand_id') as $NewProducts)
    <div class="NPP-col">
        <div class="card">
            <div class="card-wrapper">
                <div class="photo">
                    <img src="{{asset('/images/brands')}}/{{$NewProducts->brand->image}}" style="width: 250px; height: 130px;">
                </div>
                <div class="card-body">
                    @foreach ($NewProduct->where('brand_id',$NewProducts->brand_id) as $NewProducts)
                    <table class="table">
                                <td class="align-middle px-0 py-2" style="width: 30%">
                                    <a href="{{$NewProducts->linkproduct}}"><img style="width: 80%" src="{{$NewProducts->img}}"></a>
                                </td>
                                <td class="align-middle pl-3 py-3">
                                    <a href="{{$NewProducts->linkproduct}}"><p>{{$NewProducts->name}}</p></a>
                                </td>
                    </table>
                    @endforeach
                </div>
                <div class="card-footerr">
                    <a href="{{route('newproducts.detail',['name'=>$NewProducts->brand->name])}}"><button type='button' class="buttonnp" wire:click.prevent=""><span>ดูเพิ่มเติม >></span></button></a>
                </div>
            </div>    
        </div>
    </div>
    @endforeach
</div>


<style>
    #products{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    width: 95%;
    margin: auto;
    }
    .table td{
        border-style: none;
    }
    .table p:hover{
        color: rgb(100, 100, 100);
    }
    .NPP-col{
    position: relative;
    width: 31%;
    margin: 2% 0%;
    }
    .NPP-col .card{
    height: 100%;
    border-radius: 20px;
    box-shadow: 0 3px 7px rgb(153, 153, 153);
    background: #f8f8f8;
    }
    .photo{
    margin: 5% 0;
    }
    .NPP-col img{
    display: block;
    margin: auto;
    }
    .card-wrapper{
    height: 100%;
    }
    .card-body{
    display: block;
    align-items: center;
    flex-wrap: wrap;
    background: white;
    margin: 1% 5%;
    height: 450px;
    }
    .card-body .empty{
    visibility:hidden;
    }

    .card-footerr{
    display: flex;
    justify-content: end;
    margin: 2% 4%;
    }

    .buttonnp{
    background-color: #194276;
    border-radius: 15px;
    padding: 0.3rem 1rem;
    border: solid 1px white;
    color: white;
    transition: all 0.3s ease;
    }

    .buttonnp:hover{
        background: rgb(222, 226, 236);
        color: #194276;
    } 

    .wrap-pagination-info .flex.items-center.justify-between{
    margin: 0 0 0 5%;
    }

    /* resonsive */
    @media(max-width: 1400px){
    #products{
        width: 90%;
    }
    .NPP-col {
        width: 45%;
        margin: 3% 0;
    }
    .card-body{
        height: 450px;
    }
    }

    @media(max-width: 1200px){
    #products{
        width: 95%;
    }
    .NPP-col {
        width: 47.5%;
        margin: 3% 0;
    }
    .card-body{
        height: 500px;
    }
    }
    
    @media(max-width: 820px){
    #products{
        width: 95%;
    }
    .NPP-col {
        width: 95%;
        margin: 3% 0;
    }
    .card-body{
        height: auto;
    }
    .NPP-col img{
        width: 90%;
    }
    }

</style>
