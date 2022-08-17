<link rel="stylesheet" href="navfoot.css">

<button class="toggle">
    <span></span>
    <span></span>
    <span></span>
</button>

<div class="navDropWrap" id="navDropWrap">
    <div class="wrapper1" style="">  
        <div class="fa">
            <div class="icons container">
                <div class="cart-phone">
                    @guest
                    <a href="{{ route('login') }}"><button class="icon-cart-phone"><i class="bi bi-cart-fill"></i></button></a>
                    @else
                    <a href="/cart"><button class="icon-cart-phone"><i class="bi bi-cart-fill"></i></button></a>
                    @endguest
                </div>
                <div class="user-phone">
                    <a><i class="bi bi-person-circle" id="person"></i></a>
                </div>
            </div>
        </div>
        <ul class="userMenu" id="userMenu">
            @guest
                @if (Route::has('login'))
                    <a class="" href="{{ route('login') }}"><li>เข้าสู่ระบบ</li></a>
                @endif
                
                @if (Route::has('register'))
                    <a class="" href="{{ route('register') }}"><li>ลงทะเบียน</li></a>
                @endif
            @else
                <li>
                    <a class="name-phone" href="#">{{ Auth::user()->name }}</a>
                    @if(Auth::user()->role == 1)
                        <a href="{{route('customer.info')}}"><li>แก้ไขข้อมูล</li></a>
                        <a href="/order"><li>คำสั่งซื้อ</li></a>
                    @elseif(Auth::user()->role == 2)
                        <a href="{{route('dealer.changeinfo')}}"><li>แก้ไขข้อมูล</li></a>
                        <a href="{{route('dealer.registerproject')}}"><li>ลงทะเบียนโปรเจค</li></a>
                        <a href="/order"><li>คำสั่งซื้อ</li></a>
                    @elseif(Auth::user()->role == 3)
                        <a href="{{route('admin.dashboard')}}"><li>Dashboard</li></a>
                    @endif
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <li>ออกจากระบบ</li>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>    
        <ul class="mainMenu" id="mainMenu"> 
            <a href="/"><li>หน้าหลัก</li></a>
            <a href="/aboutus"><li>เกี่ยวกับเรา</li></a>
            <li>
                <div class="clickable">
                    <a href="/shop">
                        <span class="link_name" style="cursor: defualt;">ผลิตภัณฑ์</span>
                    </a>
                    <i class="bi bi-caret-left-fill" id="farrow"></i>
                </div>
                <ul class="sub-menu">
                    @foreach($categories as $category)
                    <li class="group-submenu">
                        <a href=""><span>{{$category->name}}</span></a> 
                        <i class="bi bi-caret-left-fill arrow"></i>
                    </li>
                    <ul class="subsubmenu">
                        @foreach($category->subCategories as $scategory)
                        <a href=""><li style="cursor: defualt;">{{$scategory->name}}</li></a>
                        @endforeach
                    </ul>
                    @endforeach
                </ul>
            </li>
            <a href="/service"><li>บริการ</li></a>
            <a href="/activity"><li>ข่าวสาร&กิจกรรม</li></a>
            <a href="/download"><li>ดาวน์โหลด</li></a>
            <a href="/forwork"><li>ร่วมงานกับเรา</li></a>
            <a href="/contact"><li>ติดต่อเรา</li></a>
        </ul>
    </div>
</div>

<script> 
    const farrow = document.querySelector("#farrow");
    const toggle = document.querySelector('.toggle');
    const arrow = document.querySelectorAll(".arrow");
    const navDropWrap = document.getElementById("navDropWrap");

    toggle.addEventListener('click',()=>{
        toggle.classList.toggle('is-active'); 
        if(toggle.classList.contains('is-active')) 
            navDropWrap.style.display = "block";
        else
            navDropWrap.style.display = "none";
        farrow.parentElement.parentElement.classList.remove("showMenu");
        for(let n=0 ; n<arrow.length ;n++){
            arrow[n].parentElement.classList.remove("display");
        }
    })
        
    for (let i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement;
        arrowParent.classList.toggle("display");
        for(let n=0 ; n<arrow.length ;n++){
                if(n!=i)arrow[n].parentElement.classList.remove("display");
            }
        })
    }
    
    farrow.addEventListener("click", (e) => {
        let fParent = e.target.parentElement.parentElement;
        fParent.classList.toggle("showMenu");
        if(!(farrow.parentElement.parentElement.classList.contains("showMenu"))) {
            for(let n=0 ; n<arrow.length ;n++){
                arrow[n].parentElement.classList.remove("display");
            }
        }
    });

    const person = document.getElementById("person");
    console.log(person);
    let op = false;
    const mainMenu = document.getElementById("mainMenu");
    const userMenu = document.getElementById("userMenu");
    person.addEventListener("click", (e) => {
        if(op==false){
            mainMenu.style.display ="none";
            userMenu.style.display ="inline-block";
            op =  true;
        }
        else if(op==true){
            mainMenu.style.display ="block";
            userMenu.style.display ="none";
            op =  false;
        }
    });
</script>