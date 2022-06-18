@extends('layout.link')

@section('link_navfoot')
    <link href="/css/navfoot.css" rel="stylesheet">
@endsection

@section('navfoot')
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <img src="/images/logoAbleLink.png" alt="logo">
        <div class="collapse1 navbar-collapse">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="/">หน้าหลัก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutus">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hoverdropdown" href="/shop">ผลิตภัณฑ์
                    <!-- <ul class="dropdown-menu" role="menu">
                        <li>Security</li>
                        <li>Network Infrastructure</li> 
                        <li>Telecomm/IO</li>     
                        <li>Tool and Tester</li> 
                        <li>UPS/Surge/Power Supply</li> 
                        <li>Audio/Multimedis</li> 
                        <li>Software</li>        
                        <li>Solar/Light</li>                        
                    </ul> -->
                </a>    
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/service">บริการ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/activity">ข่าวสาร&กิจกรรม</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/download">ดาวน์​โหลด</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/forwork">ร่วมงานกับเรา</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">ติดต่อเรา</a>
            </li>
        </ul>
        </div>

        <!-- search Box -->
        <div class="collapse2 navbar-collapse justify-content-end">
            <form action="" class="search-bar">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
            
        <!-- cart -->
        <a href="/cart"><button class="icon"><i class="bi bi-cart3"></i></button></a>
        

        <!-- user -->
        <div class="dropdown">
            <a class="icon" role="button" data-bs-toggle="dropdown"><i class="bi bi-person-fill"></i></a>
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
                            <a class="dropdown-item" href="/createblog">Create Post</a>
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