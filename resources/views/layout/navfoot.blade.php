@extends('layout.link')

@section('navfoot')
<!-- navbar -->
<div class="navbar">
    <div class="nav-wrap container">
        <a href="/"><img src="/images/logoAbleLink.png" alt="" logo/></a>
        <a href="/"><img src="/images/logoAbleLink2.jpg" alt="" logo2/></a>
        <div class="nav-left">
            <div class="nav-menu-wrap"> 
                <div class="topic">
                    <a href="/" class="link"><span>หน้าหลัก</span></a>
                </div>
                <div class="topic">
                    <a href="/aboutus" class="link"><span>เกี่ยวกับเรา</span></a>
                </div>
                <div class="topic">
                    <a href="/shop" class="link"><span>ผลิตภัณฑ์</span></a>
                    @livewire('navbar-component')
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
            @livewire('search-component')
            <div class="cart">
                @guest
                <a href="{{ route('login') }}"><button class="icon"><i class="bi bi-cart-fill"></i></button></a>
                @else
                    @livewire('cart-count-component')
                @endguest
            </div>
            <div class="user">
                <div class="dropdown">
                    <a class="icon" role="button" id="profileBtn" data-bs-toggle="dropdown"><i class="bi bi-person-circle"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" id="profileDrop">
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
                                    <a class="dropdown-item" href="{{route('customer.info')}}">แก้ไขข้อมูล</a>
                                    <a class="dropdown-item" href="/order">คำสั่งซื้อ</a>
                                @elseif(Auth::user()->role == 2)
                                    <a class="dropdown-item" href="{{route('dealer.changeinfo')}}">แก้ไขข้อมูล</a>
                                    <a class="dropdown-item" href="{{route('dealer.registerproject')}}">ลงทะเบียนโปรเจค</a>
                                    <a class="dropdown-item" href="/order">คำสั่งซื้อ</a>
                                @elseif(Auth::user()->role == 3)
                                    <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
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
            @livewire('phone-navbar-component')
        </div>
    </div>
</div>
<div class="fakenav "></div>

<!-- from livewire -->
<div style="width: 100%; min-height: calc(100vh - 260px);" >
    {{$slot}}
</div>

<!-- footer -->
<footer class="footer-wrapper" >
    <div class="container">
        <div class="footer">
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
                <h5>Contact</h5>
                    <ul>
                        <li>Tel : 095-145-1538</li>
                        <li>Email : ablelink.thailand99@gmail.com</li>
                        <li>ABLE LINK (Thailand) CO., LTD.</li>
                        <li>12 Soi Sukhaphiban 5 Soi 5 Yaek 3,</li>
                        <li>Tha Raeng, Bang Khen  Bangkok 10220</li>
                    </ul>
            </div>
            <div class="footer-col">
                <h5>Product</h5>
                    <ul>
                        <li><a href="/">หน้าหลัก</a></li>
                        <li><a href="/shop">ผลิตภัณฑ์</a></li>
                    </ul>
            </div>
            <div class="footer-col">
                <h5>Connect</h5>
                    <ul>
                        <li><a href="/aboutus">เกี่ยวกับเรา</a></li>
                        <li><a href="/forwork">ร่วมงานกับเรา</a></li>
                        <li><a href="/contact">ติดต่อเรา</a></li>
                    </ul>
            </div>
            <div class="footer-col">
                <h5>Customer Service</h5>
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
