<div class="prd-dropdown-wrap">
                        <div class="container prd-dropdown">
                            <div class="menu-list">
                                <h3>ผลิตภัณฑ์</h3>
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
                                        @foreach($category->subCategories as $scategory)
                                        <div class="items">
                                            <div class="item">
                                                <div class="photo">
                                                    <img src="/images/CCTV.png" alt="">
                                                </div>
                                                <div class="item-right">
                                                    <a href="#"><span><span>{{$scategory->name}}</span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach  
                                    </div>
                                @endforeach
                                <!-- <div id="content2" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Switch SMRT/L2/L3/L4</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Industrail Switch</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Wireless</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Cabling</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>SFP</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Industrail Automation</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Media Converter</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>WireMesh and FiberTray</span></span></a>
                                                
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content3" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Router 4g</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Smart Iot</span></span></a>               
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content4" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>UTP</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Fiber</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>HDMI/LAN/Wireless</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content5" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>UPS Tower</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>UPS Rack</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Power Supply</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Surge</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content6" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Ip audio</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>VOIP</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Smart Touch TV / AV Mounthing</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Multimedia</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content7" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span></span>Head</span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>CCTV VMS</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div id="content8" class="contents">
                                    <div class="items">
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Solar</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="photo">
                                                <img src="/images/CCTV.png" alt="">
                                            </div>
                                            <div class="item-right">
                                                <a href="#"><span><span>Lighting</span></span></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div> -->
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