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
            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/product">ผลิตภัณฑ์</a>
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
            <a class="nav-link" href="/for_work">ร่วมงานกับเรา</a>
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
        <button class="icon"><i class="bi bi-cart3"></i></button>

        <!-- user -->
        <div class="dropdown">
            <a class="icon" role="button" data-bs-toggle="dropdown"><i class="bi bi-person-fill"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">คำสั่งซื้อ</a></li>
                <li><a class="dropdown-item" href="#">ลงทะเบียนโปรเจค</a></li>
                <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
            </ul>
        </div>
        </div>
    </div>
    </nav>

    <!-- home -->
    @yield ('highlight')
    @yield ('newproduct')
    @yield ('activity')
    @yield ('brands')

    <!-- product -->
    @yield('product')

    <!-- service -->
    @yield ('service')

    <!-- download -->
    @yield('download')

    <!-- forwork -->
    @yield('forwork')

    <!-- contact -->
    @yield ('contact')

    <!-- main_activity -->
    @yield ('main_activity')

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
                        <li><a href="#">เกี่ยวกับเรา</a></li>
                        <li><a href="/for_work">ร่วมงานกับเรา</a></li>
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