@extends('layout.link')

@section('link_navfoot')
    <link href="/css/navfoot.css" rel="stylesheet">
@endsection

@section('navfoot')
<!-- navbar -->
<div class="navbar">
    <div class="container nav-wrap">
        <div class="nav-left">
            <img src="/images/logoAbleLink.png" alt="" logo/>
            <div class="nav-menu-wrap"> 
                <div class="topic">
                    <a href="/" class="link"><span>หน้าหลัก</span></a>
                </div>
                <div class="topic">
                    <a href="/aboutus" class="link"><span>เกี่ยวกับเรา</span></a>
                </div>
                <div class="topic">
                    <a href="/shop" class="link"><span>ผลิตภัณฑ์</span></a>
                    <div class="prd-dropdown-wrap">
                        <div class="container prd-dropdown">
                            <div class="menu-list">
                                <h3>ผลิตภัณฑ์</h3>
                                <a href="#" class="menu-link" id="menuLink1"><div class="menu-link-item"><span>Security</span></div></a>
                                <a href="#" class="menu-link" id="menuLink2"><div class="menu-link-item"><span>Network Infrastructure</span></div></a>
                                <a href="#" class="menu-link" id="menuLink3"><div class="menu-link-item"><span>Telecomm/IO</span></div></a>
                                <a href="#" class="menu-link" id="menuLink4"><div class="menu-link-item"><span>Tool and Tester</span></div></a>
                                <a href="#" class="menu-link" id="menuLink5"><div class="menu-link-item"><span>UPS/Surge/Power Supply</span></div></a>
                                <a href="#" class="menu-link" id="menuLink6"><div class="menu-link-item"><span>Audio/Multimedis</span></div></a>
                                <a href="#" class="menu-link" id="menuLink7"><div class="menu-link-item"><span>Software</span></div></a>
                                <a href="#" class="menu-link" id="menuLink8"><div class="menu-link-item last"><span>Solar/Light</span></div></a>
                            </div>
                            <div class="menu-content">
                                <div id="content1" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>CCTV</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Access control</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Video wall</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Storage server</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>CCTV accessories</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Hotel lock</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Gate barrier</span></span></a>
                                            </div>
                                        </div>         
                                    </div>  
                                </div>
                                <div id="content2" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Switch SMRT/L2/L3/L4</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Industrail Switch</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Wireless</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Cabling</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>SFP</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Industrail Automation</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Media Converter</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>WireMesh and FiberTray</span></span></a>
                                                
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content3" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Router 4g</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Smart Iot</span></span></a>               
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content4" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>UTP</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Fiber</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>HDMI/LAN/Wireless</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content5" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>UPS Tower</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>UPS Rack</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Power Supply</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Surge</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content6" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Ip audio</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>VOIP</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Smart Touch TV / AV Mounthing</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Multimedia</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content7" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span></span>Head</span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>CCTV VMS</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content8" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Solar</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Lighting</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <script>
                                document.getElementById("content1").style.display = "block";
                                for( let i = 1; i<9 ; i++) {
                                    let Parent = document.getElementById("menuLink"+i);
                                    let Child = document.getElementById("content"+i);
                                    Parent.addEventListener("mouseover" , (e) => {
                                        Child.style.display = "block";
                                        for ( let n = 1 ; n < 9 ; n++ ){
                                            if( n !== i) {
                                                document.getElementById("content"+n).style.display = "none";
                                            }
                                        }
                                    });                                  
                                }
                                const collection = document.getElementsByClassName("item-right");
                                const inner = "<a href=\"#\"><span><span>category</span></span></a>";
                                for (let d = 0; d < collection.length; d++) {
                                    collection[d].innerHTML += inner;
                                    collection[d].innerHTML += inner;
                                    collection[d].innerHTML += inner;
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="topic">
                    <a href="/service" class="link"><span>บริการ</span></a>
                </div>
                <div class="topic">
                    <a href="/activity" class="link"><span>ข่าวสาร&กิจกรรม</span></a>
                </div>
                <div class="topic">
                    <a href="/download" class="link"><span>ดาวน์​โหลด</span></a>
                </div>
                <div class="topic">
                    <a href="/forwork" class="link"><span>ร่วมงานกับเรา</span></a>
                </div>
                <div class="topic">
                    <a href="/contact" class="link"><span>ติดต่อเรา</span></a>
                </div>
            </div>
        </div>

        <div class="nav-right">
            <div class="searchbox-wrap">
                <form action="" class="searchbox">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>     
            <div class="cart icon-wrap">
                <a href="/cart"><button class="icon"><i class="bi bi-cart-fill"></i></button></a>
            </div>
            <div class="user icon-wrap">
                <div class="dropdown">
                    <a class="icon" role="button" data-bs-toggle="dropdown"><i class="bi bi-person-circle"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                        @guest
                            @if (Route::has('login'))
                                <a class="dropdown-item" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                            @endif
                            
                            @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">ลงทะเบียน</a>
                            @endif
                        @else
                            <li class="dropdown">
                                <a class="dropdown-item disabled" href="#">{{ Auth::user()->name }}</a>
                                @if(Auth::user()->role == 1)
                                    <a class="dropdown-item" href="#">แก้ไขข้อมูล</a>
                                    <a class="dropdown-item" href="#">คำสั่งซื้อ</a>
                                @elseif(Auth::user()->role == 2)
                                    <a class="dropdown-item" href="#">แก้ไขข้อมูล</a>
                                    <a class="dropdown-item" href="#">ลงทะเบียนโปรเจค</a>
                                    <a class="dropdown-item" href="#">คำสั่งซื้อ</a>
                                @elseif(Auth::user()->role == 3)
                                    <a class="dropdown-item" href="{{route('admin.homes')}}">Home Highlight</a>
                                    <a class="dropdown-item" href="{{route('admin.post')}}">Post</a>
                                    <a class="dropdown-item" href="{{route('admin.products')}}">Products</a>
                                    <a class="dropdown-item" href="{{route('admin.download')}}">Download</a>
                                @endif
                                
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    ออกจากระบบ
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>     
            </div> 
        </div>
    </div>
</div>
<div class="fakenav"></div>

<!-- from livewire -->
{{$slot}}

<!-- footer -->
<footer class="footer">
    <div class="container container-fluid">
    <div class="row">
        <div class="footer-col">
            <img src="/images/logoAbleLink.png" alt="logo">
            <div class="social">
                <a href="https://www.facebook.com/ablelinkthailand/"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-line"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <h6>Contact</h6>
                <ul>
                    <li>095-145-1538</li>
                    <li>Email : ablelink.thailand99@gmail.com</li>
                    <li>ABLE LINK (Thailand) CO., LTD.</li>
                    <li>12 Soi Sukhaphiban 5 Soi 5 Yaek 3,</li>
                    <li>Tha Raeng, Bang Khen  Bangkok 10220</li>
                </ul>
        </div>
        <div class="footer-col">
            <h6>Product</h6>
                <ul>
                    <li><a href="/">หน้าหลัก</a></li>
                    <li><a href="/product">ผลิตภัณฑ์</a></li>
                </ul>
        </div>
        <div class="footer-col">
            <h6>Connect</h6>
                <ul>
                    <li><a href="/aboutus">เกี่ยวกับเรา</a></li>
                    <li><a href="/forwork">ร่วมงานกับเรา</a></li>
                    <li><a href="/contact">ติดต่อเรา</a></li>
                </ul>
        </div>
        <div class="footer-col">
            <h6>Customer Service</h6>
            <ul>
                <li><a href="/activity">ข่าวสาร&กิจกรรม</a></li>
                <li><a href="/service">บริการ</a></li>
                <li><a href="/download">ดาวน์​โหลด</a></li>
            </ul>
        </div>
    </div>
    </div>
</footer>
@endsection