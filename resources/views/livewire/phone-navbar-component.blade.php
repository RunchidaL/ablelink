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
                <a href=""><i class="bi bi-cart-fill"></i></a>
                <a href=""><i class="bi bi-person-circle"></i></a>
            </div>
        </div>    
        <ul class="mainMenu"> 
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
</script>