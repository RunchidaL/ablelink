@extends('layout.link')

@section('navfoot')
<!-- navbar -->
<div class="navbar">
    <div class="nav-wrap container">
        <a href="/"><img src="/images/logoAbleLink.png" alt="" logo/></a>
        <a href="/"><img src="/images/logoAbleLink3.png" alt="" logo2/></a>
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
                <a href="{{ route('login') }}"><button class="iconcart"><i class="bi bi-cart-fill"></i></button></a>
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
@livewire('footer-component')

@endsection
