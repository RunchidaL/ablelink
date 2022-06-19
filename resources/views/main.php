@extends('layout.link')

@section('link_navfoot')
    <link href="/css/navfoot.css" rel="stylesheet">
@endsection

@section('navfoot')
<nav class="navbar">
    <img src="/images/logoAbleLink.png" alt="logo">
    <a href="#" class="bar"><i class="bi bi-list"></i></a>
    <div class="leftEle">
        <ul class="navbar-nav">
            <a class="nav-link" href="/">หน้าหลัก</a>
            <a class="nav-link" href="/aboutus">เกี่ยวกับเรา</a>
            <li>
                <a class="nav-link" href="/shop">ผลิตภัณฑ์</a> 
                <ul class="sub-menu">
                    <li>
                        <a href="#">Security</a>
                        <ul class="supersub-menu">
                            <li>CCTV</li>
                            <li>Access Control</li>
                            <li>Video wall</li>
                            <li>Storage server</li>
                            <li>CCTV accessories</li>
                            <li>Hotel lock</li>
                            <li>Gate barrier</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Network Infrastructure</a>
                        <ul class="supersub-menu">
                            <li>Switch SMRT/L2/L3/L4</li>
                            <li>Industrail Switch</li>
                            <li>Wireless</li>
                            <li>Cabling/li>
                            <li>SFP</li>
                            <li>Industrail Automation</li>
                            <li>Media Converter</li>
                            <li>WireMesh and FiberTray</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Telecomm/IO</a>
                        <!-- <ul class="supersub-menu">
                            <li>Router 4g</li>
                            <li>Smart lot</li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="#">Tool and Tester</a>
                        <!-- <ul class="supersub-menu">
                            <li>UTP</li>
                            <li>Fiber</li>
                            <li>HDMI/LAN/Wireless</li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="#">UPS/Surge/Power Supply</a>
                        <!-- <ul class="supersub-menu">
                            <li>UPS Tower</li>
                            <li>UPS Rack</li>
                            <li>Power Supply</li>
                            <li>Surge</li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="#">Audio/Multimedis</a>
                        <!-- <ul class="supersub-menu">
                            <li>Ip audio</li>
                            <li>VOIP</li>
                            <li>Smart Touch TV and AV Mounthing</li>
                            <li>Multimedia</li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="#">Software</a>
                        <!-- <ul class="supersub-menu">
                            <li>Network-management</li>
                            <li>CCTV VMS</li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="#">Solar/Light</a>
                        <!-- <ul class="supersub-menu">
                            <li>Solar</li>
                            <li>Lighting</li>
                        </ul> -->
                    </li>
                </ul> 
            </li>
            <a class="nav-link" href="/service">บริการ</a>
            <a class="nav-link" href="/activity">ข่าวสาร&กิจกรรม</a>
            <a class="nav-link" href="/download">ดาวน์​โหลด</a>
            <a class="nav-link" href="/forwork">ร่วมงานกับเรา</a>
            <a class="nav-link" href="/contact">ติดต่อเรา</a>
        </ul>
    </div>

    <div class="rightEle">
        <!-- search Box -->
            <div>
                <form action="" class="search-bar">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>            
        
        <!-- cart -->
        <div><a href="/cart"><button class="icon"><i class="bi bi-cart-fill"></i></button></a></div>

        <!-- user -->
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
                            <a class="dropdown-item" href="#">Category</a>
                        @endif
                        
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            ออกจากระบบ
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </li>
                @endguest
            </ul>
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