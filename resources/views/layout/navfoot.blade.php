@extends('layout.link')

@section('link_navfoot')
    <link href="/css/navfoot.css" rel="stylesheet">
@endsection

@section('navfoot')
<!-- navbar -->
<div class="fakenav"></div>
<nav class="main">
    <div class="nav-ctn-wrap">
        <div class="nav-left-element">
            <img src="/images/logoAbleLink.png" alt="logo" class="logo">
            <div class="menu-wrap">
                <a class="menus" href="/"><div class="menu-item">หน้าหลัก</div></a>
                <a class="menus" href="/aboutus"><div class="menu-item">เกี่ยวกับเรา</div></a>
                <div class="prod-wrap">
                    <a class="prod-btn" href="/shop">
                        <span>ผลิตภัณฑ์</span>
                    </a>
                    <div class="prod-dropdown">
                        <div class="subMenu-wrap">
                            <div>
                                <a href="/product_category/security"  style="padding: 0;"><li>Security</li></a>
                                <ul class="contents first">
                                    <a href="/product_category/security/service"><li>Service</li></a>
                                    <a href="/product_category/security/access-control"><li>Access Control</li></a>
                                    <a href="#"><li>Video wall</li></a>
                                    <a href="#"><li>Storage server</li></a>
                                    <a href="#"><li>CCTV accessories</li></a>
                                    <a href="#"><li>Hotel lock</li></a>
                                    <a href="#"><li>Gate barrier</li></a>
                                </ul>
                            </div> 
                            <div>
                                <a href="/product_category/network-infrastructure"  style="padding: 0;"><li>Network Infrastructure</li></a>
                                <ul class="contents">
                                    <a href="#"><li>Switch SMRT/L2/L3/L4</li></a>
                                    <a href="#"><li>Industrail Switch</li></a>
                                    <a href="#"><li>Wireless</li></a>
                                    <a href="#"><li>Cabling</li></a>
                                    <a href="#"><li>SFP</li></a>
                                    <a href="#"><li>Industrail Automation</li></a>
                                    <a href="#"><li>Media Converter</li></a>
                                    <a href="#"><li>WireMesh and FiberTray</li></a>
                                </ul>
                            </div> 
                            <div>
                                <a href="/product_category/telecomm-iot"  style="padding: 0;"><li>Telecomm/IO</li></a>
                                <ul class="contents">
                                    <a href="#"><li>Router 4g</li></a>
                                    <a href="#"><li>Smart lot</li></a>
                                </ul>
                            </div> 
                            <div>
                                <a href="/product_category/tool-and-tester"  style="padding: 0;"><li>Tool and Tester</li></a>
                                <ul class="contents">
                                    <a href="#"><li>UTP</li></a>
                                    <a href="#"><li>Fiber</li></a>
                                    <a href="#"><li>HDMI/LAN/Wireless</li></a>
                                </ul>
                            </div> 
                            <div>
                                <a href="/product_category/upssurgepower-supply"  style="padding: 0;"><li>UPS/Surge/Power Supply</li></a>
                                <ul class="contents">
                                    <a href="#"><li>UPS Tower</li></a>
                                    <a href="#"><li>UPS Rack</li></a>
                                    <a href="#"><li>Power Supply</li></a>
                                    <a href="#"><li>Surge</li></a>
                                </ul>
                            </div> 
                            <div>                          
                                <a href="/product_category/audiomultimedis"  style="padding: 0;"><li>Audio/Multimedis</li></a>
                                <ul class="contents">
                                    <a href="#"><li>Ip audio</li></a>
                                    <a href="#"><li>VOIP</li></a>
                                    <a href="#"><li>Smart Touch TV and AV Mounthing</li></a>
                                    <a href="#"><li>Multimedia</li></a>
                                </ul>
                            </div> 
                            <div>
                                <a href="/product_category/software"  style="padding: 0;"><li>Software</li></a>
                                <ul class="contents">
                                    <a href="#"><li>Network-management</li></a>
                                    <a href="#"><li>CCTV VMS</li></a>
                                </ul>
                            </div>
                            <div>
                                <a href="/product_category/solarlight"  style="padding: 0;"><li>Solar/Light</li></a>
                                <ul class="contents">
                                    <a href="#"><li>Solar</li></a>
                                    <a href="#"><li>Lighting</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a  class="menus" href="/service"><div class="menu-item">บริการ</div></a>
                <a  class="menus" href="/activity"><div class="menu-item">ข่าวสาร&กิจกรรม</div></a>
                <a  class="menus" href="/download"><div class="menu-item">ดาวน์​โหลด</div></a>
                <a  class="menus" href="/forwork"><div class="menu-item">ร่วมงานกับเรา</div></a>
                <a  class="menus" href="/contact"><div class="menu-item">ติดต่อเรา</div></a>
            </div>
        </div>
        <div class="nav-right-element">
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
                                    <a class="dropdown-item" href="{{route('admin.products')}}">Products</a>
                                    <a class="dropdown-item" href="{{route('admin.category')}}">Category</a>
                                @endif
                                
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    ออกจากระบบ
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"></form>
                                    @csrf
                            </li>
                        @endguest
                    </ul>
                </div>     
            </div> 
        </div>
    </div>
</nav>

<!-- from livewire -->
{{$slot}}

<!-- footer -->
<footer class="footer">
    <div class="container-fluid">
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