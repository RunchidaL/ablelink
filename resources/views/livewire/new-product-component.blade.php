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
    <div class="NPP-col">
        <div class="card">
            <div class="card-wrapper" >
                <div class="photo" style="text-align: center">
                    <img src="/images/brand 4.png" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{route('newproducts.detail')}}"><button type='button' class="button btn" wire:click.prevent=""><span>ดูเพิ่มเติม >></span></button></a>
                </div>
            </div>    
        </div>
    </div>

    <div class="NPP-col">
        <div class="card">
            <div class="card-wrapper">
                <img src="/images/brand 4.png" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="card-footer">
                    <button type='button' class="button btn" wire:click.prevent=""><span>ดูเพิ่มเติม >></span></button>
                </div>
            </div>    
        </div>
    </div>

    <div class="NPP-col">
        <div class="card">
            <div class="card-wrapper">
                <img src="/images/brand 4.png" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png" >
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="card-footer">
                    <button type='button' class="button btn" wire:click.prevent=""><span>ดูเพิ่มเติม >></span></button>
                </div>
            </div>    
        </div>
    </div>

    <div class="NPP-col">
        <div class="card">
            <div class="card-wrapper">
                <img src="/images/brand 4.png" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="name-np">
                        <img src="/images/CCTV.png">
                    </div>
                    <div class="name-np">
                        <p>Lorem Ipsum is printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="card-footer">
                    <button type='button' class="button btn" wire:click.prevent=""><span>ดูเพิ่มเติม >></span></button>
                </div>
            </div>    
        </div>
    </div>

</div>


<style>
    #products{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    width: 90%;
    margin: 0 5%;
    }

    .NPP-col{
    position: relative;
    width: 50%;
    margin: 1% 0%;
    }

    .NPP-col .card{
    height: 100%;
    border-radius: 20px;
    box-shadow: 0 3px 7px rgb(153, 153, 153);
    background: #f8f8f8;
    }

    .NPP-col img{
    width: 50%;
    height: auto;
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
    }

    .name-np{
        max-width: 100%;
        margin: 2% 2%;
        text-align: center;
    }

    .name-np img{
        width: 80px;
        display: block;
        margin: auto;
    }

    .card-body .empty{
    visibility:hidden;
    }

    .card-footer{
    display: flex;
    justify-content: end;
    }

    .card-footer .button{
    background-color: #194276;
    border-radius: 0;
    color: #f1f1f1
    }

    .card-footer button{
    position: relative;
    background: none;
    border: none;
    cursor: pointer;
    display: inline-block;
    }

    .card-footer button span{
    display: block;
    }
    
    .card-footer button::before,
    .card-footer button::after{
    content: "";
    width: 0;
    height: 3px;
    position: absolute;
    transition: all 0.2s linear;
    background: white;
    }
    
    .card-footer button span::before,
    .card-footer button span::after{
    content: "";
    width: 3px;
    height: 0;
    position: absolute;
    transition: all 0.2s linear;
    background: white;
    ;
    }
    
    .card-footer button:hover::before,
    .card-footer button:hover::after{
    width: 100%;
    }

    .card-footer button:hover span::before, 
    .card-footer button:hover span::after{
    height: 100%;
    }
    
    .card-footer button.btn::after{
    left: 0;
    bottom: 0;
    transition-duration: 0.4s;
    }

    .card-footer button.btn span::after{
    right: 0;
    top: 0;
    transition-duration: 0.4s;
    }

    .card-footer button.btn::before{
    right: 0;
    top: 0;
    transition-duration: 0.4s;
    }

    .card-footer button.btn span::before{
    left: 0;
    bottom: 0;
    transition-duration: 0.4s;
    }

    .wrap-pagination-info .flex.items-center.justify-between{
    margin: 0 0 0 5%;
    }

    /* resonsive */
    @media(max-width: 820px){
    .NPP-col {
        width: 100%;
        margin: 3% 0;
    }
    .card-body{
        display: block;
        align-items: center;
        flex-wrap: wrap;
        background: white;
        margin: 1% 5%;
    }
    .NPP-col img{
        width: 90%;
    }
    .name-np img{
        width: 100px;
    }
    }

</style>
