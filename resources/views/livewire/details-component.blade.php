<!-- link -->
<link href="/css/details.css" rel="stylesheet">
<!-- link -->


<div>
<div class="container">
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <strong>Success</strong> {{Session::get('success_message')}}
        </div>
    @endif
    <div class="row top-content">
        <div class="col d-flex align-items-center justify-content-center">
            <img src="{{asset('/images/products')}}/{{$product->image}}">
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
                    <a href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->web_price}})"><button>Add To Cart</button></a>
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
        
        
        <div class="tab-contents">
            <div class="line" id="network_connectivity"></div>
            <h4>Network Connectivity</h4>
            <div class="menu-wrap">
                <ul class="menu-list" id="menu-list">
                    <li class="menu active">Access Layer</li>
                    <li class="menu">40G to 4x10G</li>
                    <li class="menu">Stack for Redundancy</li>
                    <li class="menu">10G with Server</li>
                    <li class="menu">10G Interconnect</li>
                </ul>
            </div>
        
            <div class="content"> 
                <div class="wrapper">
                    <div id="item1" class="item ">
                        <div class="image"><img src="\images\products\test1.jpg" alt="" ></div>
                        <div class="tag-list">
                            <div class="tag-item">
                                <a href="#"><img src="\images\products\p1.jpg" alt=""></a>
                                <div>
                                    <a href="#" class="name">
                                        1ft (0.3m) Cat6a Snagless Shielded (SFTP) PVC CMX Ethernet Network Patch Cable, Blue
                                    </a>
                                    <div class="price">฿65.00</div>
                                </div>
                            </div>
                            <div class="tag-item">
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
                            </div>
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
                    <div id="item3" class="item">
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
                    </div>
                </div>
            </div>
            <p>{!! $product->network_connectivity !!}</p>
        </div>
            
        
        <div class="tab-contents" >
            <div class="line" id="item-spotlight"></div>
            <h4>Item Spotlight</h4>
            <p>{!! $product->item_spotlight !!}</p>
        </div>
        
        
        <div class="tab-contents" >
            <div class="line" id="feature"></div>
            <h4>Feature</h4>
            <p>{!! $product->feature !!}</p>
        </div>
        
        
        <div class="tab-contents">
            <div class="line" id="resources"></div>
            <h4>Resources</h4>
            <br>
            <div class="row">
                @if(($product->datasheet) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> datasheet}}">Datasheet</a></div>
                @endif
                @if(($product->firmware) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> firmware}}">Firm ware</a></div>
                @endif
                @if(($product->guide) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> guide}}">Guide</a></div>
                @endif
                @if(($product->cert) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> cert}}">Certificate</a></div>
                @endif
                @if(($product->config) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> config}}">Config</a></div>
                @endif
            </div>
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
