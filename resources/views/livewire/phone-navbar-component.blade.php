<link rel="stylesheet" href="navfoot.css">

<button class="toggle">
    <span></span>
    <span></span>
    <span></span>
</button>

<div class="navDropWrap" id="navDropWrap">
    <div class="wrapper1">  
        <div class="fa">
            <div class="icons container">
                <div class="cart-phone">
                    @guest
                    <a href="{{ route('login') }}"><button class="icon-cart-phone"><i class="bi bi-cart-fill"></i></button></a>
                    @else
                    <a href="/cart"><button class="icon-cart-phone"><i class="bi bi-cart-fill"></i><span class="count count-warning" id="CartCount">{{$count}}</span></button></a>
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
            <a class="m" href="/"><li>หน้าหลัก</li></a>
            <a class="m" href="/aboutus"><li>เกี่ยวกับเรา</li></a>
            <li class="p">
                <div class="clickable">
                    <a href="/shop"><span class="link_name" style="cursor: defualt;">ผลิตภัณฑ์</span></a>
                    <i class="bi bi-caret-left-fill" id="farrow"></i>
                </div>
                <ul class="sub-menu">
                    @foreach($categories as $category)
                    <li class="group-submenu">
                        <span>
                            <a href="{{route('product.category',['category_slug'=>$category->slug])}}">{{$category->name}}</a> 
                            <i class="bi bi-caret-left-fill arrow catName"></i>
                        </span>
                    </li>
                    <ul class="ssmenu">
                        @foreach($category->subCategories as $scategory)
                        <li class="group-ssmenu">
                            <!-- CCTV -->
                            <span>
                                <a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a>
                                <i class="bi bi-caret-left-fill arrow subcatName"></i>
                            </span>
                        </li>
                        <ul class="brandname-wrap">
                            @foreach($scategory->brandCategories as $brand)
                            <li class="brandname">
                                <!-- TVT -->
                                <span>
                                    <a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug,'bcategory_slug'=>$brand->brands->name ?? ''])}}">{{$brand->brands->name ?? ''}}</a> 
                                    @if(count($brand->subbrandCategories)>0)<i class="bi bi-caret-left-fill arrow subbrandArrow"></i>@endif
                                </span>
                            </li>
                            <ul class="subbrand">
                                <div class="t">
                                    @foreach($brand->subbrandCategories as $sbcategory)                                     
                                    <li>
                                        <span>
                                            <a href="#">{{$sbcategory->name}}</a>
                                        </span>
                                    </li>                                              
                                    @endforeach
                                </div>
                            </ul>
                            @endforeach
                        </ul>
                        @endforeach
                    </ul>
                    @endforeach
                </ul>
            </li>
            <a class="m" href="/service"><li>บริการ</li></a>
            <a class="m" href="/activity"><li>ข่าวสาร&กิจกรรม</li></a>
            <a class="m" href="/download"><li>ดาวน์โหลด</li></a>
            <a class="m" href="/forwork"><li>ร่วมงานกับเรา</li></a>
            <a class="m" href="/contact"><li>ติดต่อเรา</li></a>
        </ul>
    </div>
</div>

<script> 
    const farrow = document.querySelector("#farrow");
    const toggle = document.querySelector('.toggle');
    const catName = document.querySelectorAll(".catName");
    const subcatName = document.querySelectorAll(".subcatName");
    const subbrandArrow = document.querySelectorAll(".subbrandArrow");
    const navDropWrap = document.getElementById("navDropWrap");

    toggle.addEventListener('click',()=>{
        toggle.classList.toggle('is-active'); 
        if(toggle.classList.contains('is-active')) 
            navDropWrap.style.display = "block";
        else
            navDropWrap.style.display = "none";
        farrow.parentElement.parentElement.classList.remove("showMenu");
        for(let n=0 ; n<catName.length ;n++){
            catName[n].parentElement.parentElement.classList.remove("display");
        }
        for(let n=0 ; n<subcatName.length ;n++){
            subcatName[n].parentElement.parentElement.classList.remove("display");
        }
        for(let n=0 ; n<subbrandArrow.length ;n++){
            subbrandArrow[n].parentElement.parentElement.classList.remove("display");
        }
    })
        
    for (let i = 0; i < catName.length; i++){
        catName[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("display");
        for(let n=0 ; n<catName.length ;n++){
                if(n!=i) catName[n].parentElement.parentElement.classList.remove("display");
            }
        })
    }
    for (let i = 0; i < subcatName.length; i++){
        subcatName[i].addEventListener("click", (e)=>{
        let subarrowParent = e.target.parentElement.parentElement;
        subarrowParent.classList.toggle("display");
        for(let n=0 ; n<subcatName.length ;n++){
                if(n!=i) subcatName[n].parentElement.parentElement.classList.remove("display");
            }
        })
    }

    for (let i = 0; i < subbrandArrow.length; i++){
        subbrandArrow[i].addEventListener("click", (e)=>{
        let subbrandArrowParent = e.target.parentElement.parentElement;
        subbrandArrowParent.classList.toggle("display");
        for(let n=0 ; n<subbrandArrow.length ;n++){
                if(n!=i) subbrandArrow[n].parentElement.parentElement.classList.remove("display");
            }
        })
    }
    
    farrow.addEventListener("click", (e) => {
        let fParent = e.target.parentElement.parentElement;
        fParent.classList.toggle("showMenu");
        if(!(farrow.parentElement.parentElement.classList.contains("showMenu"))){
            for(let n=0 ; n<arrow.length ;n++){
                catName[n].parentElement.parentElement.classList.remove("display");
            }
        }
    });

    const person = document.getElementById("person");
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