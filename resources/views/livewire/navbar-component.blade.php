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
                                <img src="{{asset('/images/products')}}/{{$scategory->image}}" alt="">
                            </div>
                            <div class="item-right">
                                <a class="subTopic"  href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">
                                    <span><span>{{$scategory->name}}</span></span>
                                </a> 
                                @foreach($scategory->brandCategories as $brand)
                                    <div class="brand">
                                        <a class="brandname" href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug,'bcategory_slug'=>$brand->brands->name ?? ''])}}"><span>{{$brand->brands->name ?? ''}}</span></a>
                                        @if(count($brand->subbrandCategories)>0)
                                        <div class="box-wrap">
                                            <div class="box">
                                            @foreach($brand->subbrandCategories as $sbcategory)                                     
                                                <a href="#">> {{$sbcategory->name}}</a>                                               
                                            @endforeach
                                            </div>
                                        </div> 
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.getElementById("content1").style.display = "block";
    const elementSize = document.getElementsByClassName("menu-link-item").length;
    for( let i = 1; i <= elementSize ; i++){
        let Parent = document.getElementById("menuLink"+i);
        let Child = document.getElementById("content"+i);
        Parent.addEventListener("mouseover" , (e) => {
            Child.style.display = "block";
            for ( let n = 1 ; n <= elementSize ; n++ ){
                if( n !== i){
                    document.getElementById("content"+n).style.display = "none";
                }
            }
        });                                  
    }
</script>