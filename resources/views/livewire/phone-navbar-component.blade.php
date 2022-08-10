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
        @php
                $i = 0; 
        @endphp
        @foreach($categories as $category)
            @php
                $i++; 
            @endphp
            <div class="b" id="m{{$i}}">{{$category->name}}</div>
        @endforeach
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
        @php
            $l = 0; 
        @endphp
        @foreach($categories as $category)
            @php
                $l++; 
            @endphp
            <span class="sub" id="sub{{$l}}">
                @foreach($category->subCategories as $scategory)
                    <div class="b">{{$scategory->name}}</div>
                @endforeach
            </span>
        @endforeach
    </div>
</div>

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
    for( let i = 1; i<=8; i++) {
        let Parent = document.getElementById("m"+i);
        console.log(i,"=",Parent);
        let Child = document.getElementById("sub"+i);
        Parent.addEventListener("click" , (e) => {
        d.style.display="none";
            eWrap.style.display = "block";
            Child.style.display = "block";
            for ( let n = 1 ; n <= 8 ; n++ ){
                if(n!=i){
                    document.getElementById("sub"+n).style.display = "none"; 
                }
                
            }
        });                                  
    }
</script>