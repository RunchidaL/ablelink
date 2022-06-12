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
            <a class="nav-link" href="#">หน้าหลัก</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >ผลิตภัณฑ์</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item col" href="#">Security</a></li>
                    <li><a class="dropdown-item col" href="#">Network Infrastructure</a></li>
                    <li><a class="dropdown-item col" href="#">Telecomm/IOT</a></li>
                    <li><a class="dropdown-item col" href="#">Tool and Tester</a></li>
                    <li><a class="dropdown-item col" href="#">UPS/Power supply/surge</a></li>
                    <li><a class="dropdown-item col" href="#">Audio/Multimedia</a></li>
                    <li><a class="dropdown-item col" href="#">Software</a></li>
                    <li><a class="dropdown-item col" href="#">Solar/Light</a></li>
                </ul>
            </li>
                <!-- <div class="container">
                    <div class="row">
                        <div class="col">Security</div>
                        <div class="col">Network Infrastructure</div>
                        <div class="col">Telecomm/IOT</div>
                        <div class="col">Tool and Tester</div>
                        <div class="col">UPS/Surge/Power supply</div>
                        <div class="col">Audio/Multimedia</div>
                        <div class="col">Software</div>
                        <div class="col">Solar/Light</div>
                    </div>
                </div> -->
            <li class="nav-item">
            <a class="nav-link" href="#">บริการ</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">ข่าวสาร&กิจกรรม</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">ดาวน์​โหลด</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">ร่วมงานกับเรา</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/contact">ติดต่อเรา</a>
            </li>
        </ul>
        
        <div class="collapse2 navbar-collapse justify-content-end">
            <form action="" class="search-bar">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        <button class="icon"><i class="bi bi-cart3"></i></button>
        <button class="icon"><i class="bi bi-person-fill"></i></button>
        </div>

        
    </div>
    </nav>

    <!-- home -->
    @yield ('highlight')
    @yield ('newproduct')
    @yield ('activity')
    @yield ('brands')

    <!-- contact -->
    @yield ('contact')
    
    


    <!-- footer -->
    <footer class="footer">
        <div class="container-fluid">
        <div class="row">
            <div class="footer-col">
                <img src="/images/logoAbleLink.png" alt="logo">
                <div class="social">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-line"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                    <a href="#"><i class="bi bi-telephone"></i></a>
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
                        <li><a href="#">หน้าหลัก</a></li>
                        <li><a href="#">ผลิตภัณฑ์</a></li>
                    </ul>
            </div>
            <div class="footer-col">
                <h6>Connect</h6>
                    <ul>
                        <li><a href="#">เกี่ยวกับเรา</a></li>
                        <li><a href="#">ร่วมงานกับเรา</a></li>
                        <li><a href="#">ติดต่อเรา</a></li>
                    </ul>
            </div>
            <div class="footer-col">
                <h6>Customer Service</h6>
                    <ul>
                        <li><a href="#">ข่าวสาร&กิจกรรม</a></li>
                        <li><a href="#">บริการ</a></li>
                        <li><a href="#">ดาวน์​โหลด</a></li>
                    </ul>
            </div>
        </div>
        </div>
    </footer>
    
@endsection