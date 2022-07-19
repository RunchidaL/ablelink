<div class="prd-dropdown-wrap">
    <div class="container prd-dropdown">
        <div class="menu-list">
            <h3>ผลิตภัณฑ์ทั้งหมด</h3>
            @php
                $i = 0; 
            @endphp
            @foreach($categories as $category)
                @php
                    $i++; 
                @endphp
                <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="menu-link"><div class="menu-link-item" id="menuLink{{$i}}"><span>{{$category->name}}</span></div></a>
            @endforeach
        </div>
        <div class="menu-content">
            @php
                $l = 0; 
            @endphp
            @foreach($categories as $category)
                @php
                    $l++; 
                @endphp
                <div id="content{{$l}}" class="contents">
                    <div class="items">
                        @foreach($category->subCategories as $scategory) 
                        <div class="item">
                            <div class="photo">
                                <img src="/images/CCTV.png" alt="">
                            </div>
                            <div class="item-right">
                                <a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}"><span><span>{{$scategory->name}}</span></span></a>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            document.getElementById("content1").style.display = "block";
            for( let i = 1; i<9 ; i++) {
                let Parent = document.getElementById("menuLink"+i);
                let Child = document.getElementById("content"+i);
                Parent.addEventListener("mouseover" , (e) => {
                    Child.style.display = "block";
                    for ( let n = 1 ; n < 9 ; n++ ){
                        if( n !== i) {
                            document.getElementById("content"+n).style.display = "none";
                        }
                    }
                });                                  
            }
            const collection = document.getElementsByClassName("item-right");
            const inner = "<a href=\"#\"><span><span>category</span></span></a>";
            for (let d = 0; d < collection.length; d++) {
                collection[d].innerHTML += inner;
                collection[d].innerHTML += inner;
                collection[d].innerHTML += inner;
            }
        </script>
    </div>
</div>