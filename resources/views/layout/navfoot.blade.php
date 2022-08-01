@extends('layout.link')

@section('navfoot')
<!-- navbar -->
<div class="navbar">
    <div class="nav-wrap container">
        <img src="/images/logoAbleLink.png" alt="" logo/>
        <img src="/images/logoAbleLink2.jpg" alt="" logo2/>
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
            <div class="searchbox-wrap">
                <form action="" class="searchbox">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>     
            <div class="cart icon-wrap">
                @guest
                <a href="{{ route('login') }}"><button class="icon"><i class="bi bi-cart-fill"></i></button></a>
                @else
                <a href="/cart"><button class="icon"><i class="bi bi-cart-fill"></i></button></a>
                @endguest
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
                                    <a class="dropdown-item" href="/order">คำสั่งซื้อ</a>
                                @elseif(Auth::user()->role == 2)
                                    <a class="dropdown-item" href="{{route('dealer.changeinfo')}}">แก้ไขข้อมูล</a>
                                    <a class="dropdown-item" href="{{route('dealer.registerproject')}}">ลงทะเบียนโปรเจค</a>
                                    <a class="dropdown-item" href="/order">คำสั่งซื้อ</a>
                                @elseif(Auth::user()->role == 3)
                                    <a class="dropdown-item" href="{{route('admin.Dealer')}}">Dealer</a>
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
            <button class="toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="a-wrap" id="a-wrap">
                <div class="a">
                    <div class="fa">
                        <div class="icons container">
                            <i class="bi bi-cart-fill"></i>
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </div>
                    <div class="b">
                        <a href="/" class="c"><span>หน้าหลัก</span></a>
                    </div>
                    <div class="b">
                        <a href="/aboutus" class="c"><span>เกี่ยวกับเรา</span></a>
                    </div>
                    <div class="b">
                        <span class="c" id="product-mobile"><span>ผลิตภัณฑ์</span></span>
                    </div>
                    <div class="b">
                        <a href="/service" class="c"><span>บริการ</span></a>
                    </div>
                    <div class="b">
                        <a href="/activity" class="c"><span>ข่าวสาร&กิจกรรม</span></a>
                    </div>
                    <div class="b">
                        <a href="/download" class="c"><span>ดาวน์​โหลด</span></a>
                    </div>
                    <div class="b">
                        <a href="/forwork" class="c"><span>ร่วมงานกับเรา</span></a>
                    </div>
                    <div class="b">
                        <a href="/contact" class="c"><span>ติดต่อเรา</span></a>
                    </div>
                </div>
            </div>
            <div class="d-wrap" id="d">
                <div class="a">
                    <div class="fa">
                        <div class="icons container">
                            <i class="bi bi-cart-fill"></i>
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </div>
                    <div class="b" id="m1">menu1</div>
                    <div class="b" id="m2">menu2</div>
                    <div class="b" id="m3">menu3</div>
                    <div class="b" id="m4">menu4</div>
                    <div class="b" id="m5">menu5</div>
                    <div class="b" id="m6">menu6</div>
                </div>
            </div>
            <div class="e-wrap" id="e">
                <div class="a">
                    <div class="fa">
                        <div class="icons container">
                            <i class="bi bi-cart-fill"></i>
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </div>
                    <span class="sub" id="sub1">
                        <div class="b">1.submenu1</div>
                        <div class="b">1.submenu2</div>
                        <div class="b">1.submenu3</div>
                        <div class="b">1.submenu4</div>
                        <div class="b">1.submenu5</div>
                        <div class="b">1.submenu6</div>
                    </span>
                    <span class="sub" id="sub2">
                        <div class="b">2.submenu1</div>
                        <div class="b">2.submenu2</div>
                        <div class="b">2.submenu3</div>
                        <div class="b">2.submenu4</div>
                        <div class="b">2.submenu5</div>
                        <div class="b">2.submenu6</div>
                    </span>
                    <span class="sub" id="sub3">
                        <div class="b">3.submenu1</div>
                        <div class="b">3.submenu2</div>
                        <div class="b">3.submenu3</div>
                        <div class="b">3.submenu4</div>
                        <div class="b">3.submenu5</div>
                        <div class="b">3.submenu6</div>
                    </span>
                    <span class="sub" id="sub4">
                        <div class="b">4.submenu1</div>
                        <div class="b">4.submenu2</div>
                        <div class="b">4.submenu3</div>
                        <div class="b">4.submenu4</div>
                        <div class="b">4.submenu5</div>
                        <div class="b">4.submenu6</div>
                    </span>
                    <span class="sub" id="sub5">
                        <div class="b">5.submenu1</div>
                        <div class="b">5.submenu2</div>
                        <div class="b">5.submenu3</div>
                        <div class="b">5.submenu4</div>
                        <div class="b">5.submenu5</div>
                        <div class="b">5.submenu6</div>
                    </span>
                    <span class="sub" id="sub6">
                        <div class="b">6.submenu1</div>
                        <div class="b">6.submenu2</div>
                        <div class="b">6.submenu3</div>
                        <div class="b">6.submenu4</div>
                        <div class="b">6.submenu5</div>
                        <div class="b">6.submenu6</div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fakenav"></div>

<script>
    const toggle = document.querySelector('.toggle');
    toggle.addEventListener('click',()=>{
        toggle.classList.toggle('is-active');
    })

    let isOpen = false;
    const aWrap = document.getElementById("a-wrap");
    const d = document.getElementById("d");
    const eWrap = document.getElementById("e");
    
    toggle.addEventListener('click', () => {
        if(isOpen===true) {
            isOpen = false;
            aWrap.style.display = "none";
        d.style.display="none";
        e.style.display = "none";

        } else if (isOpen === false){
            isOpen = true;
            aWrap.style.display = "flex";
        d.style.display="none";
        e.style.display = "none";
        }  
    });

    const prod = document.getElementById("product-mobile"); 
    prod.addEventListener('click', ()=> {

        aWrap.style.display = "none";
        d.style.display="block";
    })
    for( let i = 1; i<=6; i++) {
        let Parent = document.getElementById("m"+i);
        console.log(i,"=",Parent);
        let Child = document.getElementById("sub"+i);
        Parent.addEventListener("click" , (e) => {
        d.style.display="none";

            eWrap.style.display = "block";
            Child.style.display = "block";
            for ( let n = 1 ; n <= 6 ; n++ ){
                if(n!=i){
                    document.getElementById("sub"+n).style.display = "none"; 
                }
                
            }
        });                                  
    }
</script>

<!-- from livewire -->
{{$slot}}

<!-- footer -->
<footer class="footer-wrapper">
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
                        <li><a href="/product">ผลิตภัณฑ์</a></li>
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