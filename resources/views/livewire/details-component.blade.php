<link href="/css/details.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{asset('/images/products')}}/{{$product -> image}}">
        </div>
        <div class="col" id="right">
            <p>{{$product->name}}</p>
            @if(($product->web_price) == '0')
                <p></p>
            @else
                <p>฿{{number_format($product->web_price)}}</p>
            @endif
            <p>In stock {{$product->stock}}</p>
            <div class="quantity">
                <input value="1">
                <div class="handle">
                    <a href="#"><button><i class="bi bi-caret-up"></i></button></a>
                    <a href="#"><butoon><i class="bi bi-caret-down"></i></butoon></a>
                </div>
                <div class="addtocart" style="display: inline-block;">
                    <a href="#"><button>Add To Cart</button></a>
                </div> 
            </div>
            <div class="relate_product">
                <div class="models"><br>
                    <p>Models:</p>
                    <div class="row">
                        @foreach($product_models->where('product_id',$product->id) as $product_model)
                        <div class="col-2 d-flex mt-2">
                            <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->name}}</a>
                        </div>
                        @endforeach
                    </div>
                </div><br>
                <div class="series">
                    <p>Series:</p>
                    <div class="row">
                        @foreach($product_models->where('group_products',$product->groupproduct_id)->unique('series_id') as $product_model)
                            <div class="col-2 d-flex mt-2">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->product->slug])}}">{{$product_model->series->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div><br>
                <div class="types">
                    <p>Types:</p>
                    <div class="row">
                    @foreach($product_models->where('product_id',$product->id)->unique('series_id') as $product_model)
                        @foreach($types as $type)
                            @if($type->series_id === $product_model->series_id)
                            <div class="col-2 d-flex mt-2">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$type->product->slug])}}">{{$type->name}}</a>
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div><br>
                <div class="jacket">
                    <p>Jacket Types:</p>
                    <div class="row">
                    @foreach($product_models->where('product_id',$product->id)->unique('type_id') as $product_model)
                        @foreach($jacket_products as $jacket_product)
                            @if($jacket_product->type_id === $product_model->type_id)
                            <div class="col-2 d-flex mt-2">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$jacket_product->product->slug])}}">{{$jacket_product->jacket_type->name}}</a>
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="infomation">
        <div class="tab-contral">
            <a href="#overview" id="overview">Overview</a>
            <a href="#application">Application</a>
            <a href="#network_connectivity">Network Connectivity</a>
            <a href="#item-spotlight">Item Spotlight</a>
            <a href="#feature">Feature</a>
            <a href="#videos">Videos</a>
            <a href="#resources">Resources</a>
        </div>
        
        <div class="tab-contents">
            <h4>Overview</h4>
            <p id="">{!! $product->overview !!}</p>
        </div>
        
        <div class="line" id="application"></div>
        <div class="tab-contents">
            <h4>Application</h4>
            <p>{!! $product->application !!}</p>
        </div>
        
        <div class="line" id="network_connectivity"></div>
        <div class="tab-contents">
            <h5>Network Connectivity</h5>
        </div>

        <!-- oum -->
        @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
            <p class="card-text"><small class="text-muted">{{$network_product->image_id->type->name}}</small></p>
            <img width="100" height="100"src="{{asset('/images/products')}}/{{$network_product->image_id->image}}">
        @endforeach

        <br>
        @foreach($network_products->where('product_id',$product->id) as $network_product)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <p>{{$network_product->image_id->type->name}}</p>
                    <img width="100" height="100"src="{{asset('/images/products')}}/{{$network_product->photo->image}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <a href="{{route('product.details',['slug'=>$network_product->photo->slug])}}">{{$network_product->photo->name}}</a>
                    <p class="card-text"><small class="text-muted">{{$network_product->photo->web_price}}</small></p>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- oum -->


        <!-- sui -->
            <h4>Network Connectivity</h4>
            <div class="menu-wrap">
                <ul class="menu-list" id="menu-list">
                @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
                    <li class="menu">{{$network_product->image_id->type->name}}</li>
                @endforeach
                </ul>
            </div>
        
            <div class="content"> 
                <div class="wrapper">
                    <div id="item1" class="item ">
                        <div class="image"><img src="\images\products\test1.jpg" alt="" ></div>
                        <div class="tag-list">
                        @foreach($network_products->where('product_id',$product->id) as $network_product)
                            <div class="tag-item">
                                <a href="#"><img width="100" height="100"src="{{asset('/images/products')}}/{{$network_product->photo->image}}" class="img-fluid rounded-start" alt="..."></a>
                                <div>
                                    <a href="#" class="name">
                                    {{$network_product->photo->name}}
                                    </a>
                                    <div class="price">฿{{$network_product->photo->web_price}}</div>
                                    
                                </div>
                            </div>
                        @endforeach
                            <!-- <div class="tag-item">
                                <a href="#"><img src="\images\products\p2.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        0.5m (2ft) 10G SFP+ Passive Direct Attach Copper Twinax Cable for FS Switches
                                    </a>
                                    <div class="price">฿378.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p3.jpeg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        10GBASE-SR SFP+ 850nm 300m DOM Duplex LC MMF Transceiver Module for FS Switches
                                    </a>
                                    <div class="price">฿688.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p4.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        1m (3ft) LC UPC to LC UPC Duplex OM4 Multimode PVC (OFNR) 2.0mm Fiber Optic Patch Cable
                                    </a>
                                    <div class="price">฿148.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p5.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        S5860-20SQ, 24-Port Ethernet L3 Switch, 20 x 10Gb SFP+, with 4 x 25Gb SFP28 and 2 x 40Gb QSFP+, Support Stacking, Broadcom Chip
                                    </a>
                                    <div class="price">฿55,010.00</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div id="item2" class="item show">
                        <div class="image"><img src="\images\products\test2.png" alt="" ></div>
                        <div class="tag-list">
                            <div class="tag-item">
                                <a href="#">
                                    <img src="\images\products\p6.jpg" alt="">
                                </a>
                                <div>
                                    <a href="#" class="name">
                                        S3900-24T4S, 24-Port Gigabit Ethernet L2+ Switch, 24 x Gigabit RJ45, with 4 x 10Gb SFP+ Uplinks, Stackable Switch, Broadcom Chip, Fanless
                                    </a>
                                    <div class="price">฿11,319.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p7.jpeg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        10GBASE-SR SFP+ 850nm 300m DOM Duplex LC MMF Transceiver Module for FS Switches
                                    </a>
                                    <div class="price">฿688.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p8.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        1m (3ft) MTP® Female to 4 LC UPC Duplex 8 Fibers Type B Plenum (OFNP) OM4 50/125 Multimode Elite Breakout Cable, Magenta
                                    </a>
                                    <div class="price">฿1,479.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p9.jpeg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        FS QSFP-SR4-40G Compatible 40GBASE-SR4 QSFP+ 850nm 150m DOM MTP/MPO-12 MMF Optical Transceiver Module
                                    </a>
                                    <div class="price">฿1,342.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p10.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        S5860-20SQ, 24-Port Ethernet L3 Switch, 20 x 10Gb SFP+, with 4 x 25Gb SFP28 and 2 x 40Gb QSFP+, Support Stacking, Broadcom Chip
                                    </a>
                                    <div class="price">฿55,012.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="item3" class="item">
                        <div class="image"><img src="\images\products\test3.png" alt="" ></div>
                        <div class="tag-list">
                            <div class="tag-item">
                                <a href="#">
                                    <img src="\images\products\p11.jpg" alt="">
                                </a>
                                <div>
                                    <a href="#" class="name">
                                        S5860-20SQ, 24-Port Ethernet L3 Switch, 20 x 10Gb SFP+, with 4 x 25Gb SFP28 and 2 x 40Gb QSFP+, Support Stacking, Broadcom Chip
                                    </a>
                                    <div class="price">฿55,012.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p12.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        S3900-24T4S, 24-Port Gigabit Ethernet L2+ Switch, 24 x Gigabit RJ45, with 4 x 10Gb SFP+ Uplinks, Stackable Switch, Broadcom Chip, Fanless
                                    </a>
                                    <div class="price">฿11,319.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p13.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        N8560-48BC, 48-Port Ethernet L3 Data Center Switch, 48 x 25Gb SFP28, with 8 x 100Gb QSFP28, Support Stacking, Broadcom Chip, Software Installed
                                    </a>
                                    <div class="price">฿237,354.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p14.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        Cisco SFP-10G-SR Compatible 10GBASE-SR SFP+ 850nm 300m DOM Duplex LC MMF Transceiver Module
                                    </a>
                                    <div class="price">฿688.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p15.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        Cisco SFP-25G-SR-S Compatible 25GBASE-SR SFP28 850nm 100m DOM Duplex LC MMF Optical Transceiver Module
                                    </a>
                                    <div class="price">฿1,342.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="item4" class="item">
                        <div class="image"><img src="\images\products\test4.png" alt="" ></div>
                        <div class="tag-list">
                            <div class="tag-item">
                                <a href="#">
                                    <img src="\images\products\p16.jpg" alt="">
                                </a>
                                <div>
                                    <a href="#" class="name">
                                        S3900-24T4S, 24-Port Gigabit Ethernet L2+ Switch, 24 x Gigabit RJ45, with 4 x 10Gb SFP+ Uplinks, Stackable Switch, Broadcom Chip, Fanless
                                    </a>
                                    <div class="price">฿11,319.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p17.jpeg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        RS6140, 1U Rackmount Server, Dual Intel® Xeon® Scalable Processors, Up to 6TB DRAM, 10 x 2.5'' Hot-swap NVMe/SATA/SAS Drive Bays, 2 x 10GbE SFP+ and 2 x RJ45 1GbE Ports, 750W Redundant
                                    </a>
                                    <div class="price">฿182,307.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p18.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        Intel X710-BM2-Based Ethernet Network Interface Card, 10G Dual-Port SFP+, PCIe 3.0 x 8, Tall&Short Bracket
                                    </a>
                                    <div class="price">฿19,576.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p19.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        1m (3ft) LC UPC to LC UPC Duplex OM4 Multimode PVC (OFNR) 2.0mm Fiber Optic Patch Cable
                                    </a>
                                    <div class="price">฿148.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p20.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        Cisco SFP-10G-SR Compatible 10GBASE-SR SFP+ 850nm 300m DOM Duplex LC MMF Transceiver Module
                                    </a>
                                    <div class="price">฿688.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="item5" class="item">
                        <div class="image"><img src="\images\products\test5.png" alt="" ></div>
                        <div class="tag-list">
                            <div class="tag-item">
                                <a href="#">
                                    <img src="\images\products\p21.jpg" alt="">
                                </a>
                                <div>
                                    <a href="#" class="name">
                                        S3900-24T4S, 24-Port Gigabit Ethernet L2+ Switch, 24 x Gigabit RJ45, with 4 x 10Gb SFP+ Uplinks, Stackable Switch, Broadcom Chip, Fanless
                                    </a>
                                    <div class="price">฿11,319.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p22.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        S5860-20SQ, 24-Port Ethernet L3 Switch, 20 x 10Gb SFP+, with 4 x 25Gb SFP28 and 2 x 40Gb QSFP+, Support Stacking, Broadcom Chip
                                    </a>
                                    <div class="price">฿55,012.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p23.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        Cisco SFP-10G-SR Compatible 10GBASE-SR SFP+ 850nm 300m DOM Duplex LC MMF Transceiver Module
                                    </a>
                                    <div class="price">฿688.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p24.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        1m (3ft) LC UPC to LC UPC Duplex OM4 Multimode PVC (OFNR) 2.0mm Fiber Optic Patch Cable
                                    </a>
                                    <div class="price">฿148.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p25.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        Intel X710-BM2-Based Ethernet Network Interface Card, 10G Dual-Port SFP+, PCIe 3.0 x 8, Tall&Short Bracket
                                    </a>
                                    <div class="price">฿72.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p26.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        Intel X710-BM2-Based Ethernet Network Interface Card, 10G Dual-Port SFP+, PCIe 3.0 x 8, Tall&Short Bracket
                                    </a>
                                    <div class="price">฿19,576.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p27.jpeg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        RS6140, 1U Rackmount Server, Dual Intel® Xeon® Scalable Processors, Up to 6TB DRAM, 10 x 2.5'' Hot-swap NVMe/SATA/SAS Drive Bays, 2 x 10GbE SFP+ and 2 x RJ45 1GbE Ports, 750W Redundant
                                    </a>
                                    <div class="price">฿182,307.00</div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
            
        <div class="line" id="item-spotlight"></div>
        <div class="tab-contents" >
            <h4>Item Spotlight</h4>
            <p>{!! $product->item_spotlight !!}</p>
        </div>
        
        <div class="line" id="feature"></div>
        <div class="tab-contents" >
            <h4>Feature</h4>
            <p>{!! $product->feature !!}</p>
        </div>
        @if(($product->videos) == "")
        @else
        <div class="line" id="videos"></div>
            <div class="tab-contents">
                <h5>videos</h5>
                <div class="row">
                    @php
                        $videos = explode(",",$product->videos);
                    @endphp
                    @foreach($videos as $video)
                    <div class="col-4 mt-2">
                        <div class="card" style="width: 20rem;">
                            <iframe class="card-img-top" width="350" height="250" src="{{url('/images/products')}}/{{$video}}" sandbox=""></iframe>
                            <div class="card-body">
                                <p class="card-text">{{$video}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="line" id="feature"></div>
        <div class="tab-contents" id="resources">
            <h5>Resources</h5>
            <br>
            <div class="row">
                @if(($product->datasheet) == "")
                @else
                    <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> datasheet}}">Datasheet</a></div>
                @endif
                @if(($product->firmware) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> firmware}}">Firm ware</a></div>
                @endif
                @if(($product->guide) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> guide}}">Guide</a></div>
                @endif
                @if(($product->cert) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> cert}}">Certificate</a></div>
                @endif
                @if(($product->config) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> config}}">Config</a></div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
let menu = document.querySelectorAll(".menu-list .menu");
let content = document.querySelectorAll(".wrapper .item");
for (let i = 0; i < menu.length; i++) {
    
    menu[i].addEventListener("click", () => {
        console.log(i,menu[i],content[i]);
        content[i].style.display = ("flex");
        menu[i].classList.add("active");
        for (let n=0 ; n<menu.length; n++){
            if(n!=i) {
            menu[n].classList.remove("active");
            content[n].style.display = ("none");
            }
        }
    });
    
}

</script>
