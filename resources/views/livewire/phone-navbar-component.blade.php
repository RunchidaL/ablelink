<link rel="stylesheet" href="/css/phoneNavbar.css">

<button class="toggle">
    <span></span>
    <span></span>
    <span></span>
</button>

<div class="mobile-navbar" id="mobile-navbar" once>
    <ul class="first">
        <li class="double-icons">
            @guest
            <a href="{{ route('login') }}"><span><i class="bi bi-cart-fill"></i></span></a>
            @else
            <a href="/cart"><span><i class="bi bi-cart-fill"></i></span></a>
            @endguest
            <span id="person"><i class="bi bi-person-circle"></i></span> 
        </li>
        <ul class="my-account" id="my-account" style="--ulbg: #EAFD92;">
            <li class="goBack" id="goBack"><span><i class="bi bi-caret-left-fill arrow"></i>back</span></li>
            @guest
                <li class="menu"><a href="{{ route('login') }}"><span>เข้าสู่ระบบ</span></a></li>
                <li class="menu"><a href="{{ route('register') }}"><span>ลงทะเบียน</span></a></li>
            @else
            <li>
                <li class="menu-name"><a class="name-phone" href="#"><span>{{ Auth::user()->name }}</span></a></li>
                @if(Auth::user()->role == 1)
                    <li class="menu"><a href="{{route('customer.info')}}"><span>แก้ไขข้อมูล</span></a></li>
                    <li class="menu"><a href="/order"><span>คำสั่งซื้อ</span></a></li>
                @elseif(Auth::user()->role == 2)
                    <li class="menu"><a href="{{route('dealer.changeinfo')}}"><span>แก้ไขข้อมูล</span></a></li>
                    <li class="menu"><a href="{{route('dealer.registerproject')}}"><span>ลงทะเบียนโปรเจค</span></a></li>
                    <li class="menu"><a href="/order"><span>คำสั่งซื้อ</span></a></li>
                @elseif(Auth::user()->role == 3)
                    <li class="menu"><a href="{{route('admin.dashboard')}}"><span>Dashboard</span></a></li>
                @endif
                <li class="menu">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span>ออกจากระบบ</span>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>

        <li class="menu"><a href="/"><span>หน้าหลัก</span></a></li>
        <li class="menu"><a href="/aboutus"><span>เกี่ยวกับเรา</span></a></li>
        <li class="menu" id="ulOpenBtn"><span>ผลิตภัณฑ์<i class="bi bi-caret-right-fill arrow"></i></span></li>
        <ul class="second" style="--ulbg: #9d03fc;">
            <li class="goBack" id="goBack"><span><i class="bi bi-caret-left-fill arrow"></i>back</span></li>
            <li class="menu"><a href="/shop"><span>View All ผลิตภัณฑ์</span></a></li>   
            @foreach($categories as $category)
                <li class="menu" id="ulOpenBtn"><span>{{$category->name}}<i class="bi bi-caret-right-fill arrow"></i></span></li>
                <ul class="third" style="--ulbg: #036bfc;">
                    <li class="goBack" id="goBack"><span><i class="bi bi-caret-left-fill arrow"></i>back</span></li>
                    <li class="menu"><a href="{{route('product.category',['category_slug'=>$category->slug])}}"><span>View All {{$category->name}}</span></a></li>   
                    @foreach($category->subCategories as $scategory)
                        <li class="menu" id="ulOpenBtn"><span>{{$scategory->name}}<i class="bi bi-caret-right-fill arrow"></i></span></li>
                        <ul class="fourth" style="--ulbg: #03c6fc;">
                            <li class="goBack" id="goBack"><span><i class="bi bi-caret-left-fill arrow"></i>back</span></li>
                            <li class="menu"><a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}"><span>View All {{$scategory->name}}</span></a></li>   
                            @foreach($scategory->brandCategories as $brand)
                                <li class="menu" id="ulOpenBtn"><span>{{$brand->brands->name ?? ''}}<i class="bi bi-caret-right-fill arrow"></i></span></li>
                                <ul class="fifth" style="--ulbg: #03fc90;">
                                    <li class="goBack" id="goBack"><span><i class="bi bi-caret-left-fill arrow"></i>back</span></li>
                                    <li class="menu"><a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug,'bcategory_slug'=>$brand->brands->name ?? ''])}}"><span>View All {{$brand->brands->name ?? ''}} @if(count($brand->subbrandCategories)>0) @endif</span></a></li>   
                                    @foreach($brand->subbrandCategories as $sbcategory)
                                        <li class="menu" id="ulOpenBtn"><a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug,'bcategory_slug'=>$brand->brands->slug ?? '','sbcategory_slug'=>$sbcategory->slug])}}"><span>{{$sbcategory->name}}</span></a></li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul>
                    @endforeach
                </ul>
            @endforeach
        </ul>

        <li class="menu"><a href="/service"><span>บริการ</span></a></li>
        <li class="menu"><a href="/activity"><span>ข่าวสาร&กิจกรรม</span></a></li>
        <li class="menu"><a href="/download"><span>ดาวน์โหลด</span></a></li>
        <li class="menu"><a href="/forwork"><span>ร่วมงานกับเรา</span></a></li>
        <li class="menu"><a href="/contact"><span>ติดต่อเรา</span></a></li>
    </ul>
</div>

<script> 
    const toggle = document.querySelector('.toggle');
    const mobileNavbar = document.querySelector('#mobile-navbar');
    const clickBtn = document.querySelectorAll("#ulOpenBtn");

    toggle.addEventListener('click',
        () => {
            toggle.classList.toggle('is-active');
            mobileNavbar.classList.toggle('open');
            if(!toggle.classList.contains('is-active'))
            {
                for(let i=0;i<clickBtn.length;i++)
                {
                    clickBtn[i].classList.remove('display');
                    mobileNavbar.setAttribute('once', '');
                }
            }
        }
    );

    const person = document.querySelector("#person");
    person.addEventListener('click',
        () => {
            person.parentElement.classList.toggle('display');
            mobileNavbar.removeAttribute('once');
        }
    )
    
    for( let i=0 ; i < clickBtn.length ; i++)
    {
        clickBtn[i].addEventListener('click',
            (e) => {
                clickBtn[i].classList.toggle('display');
                mobileNavbar.removeAttribute('once');
            }
        );
    }

    const goBack = document.querySelectorAll("#goBack");
    for(let i=0 ; i < goBack.length ; i++ )
    {
        goBack[i].addEventListener('click',
            (e) => {
                goBack[i].parentElement.previousElementSibling.classList.remove('display');
            }
        );
    }
</script>