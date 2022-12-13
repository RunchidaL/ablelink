<div class="All">
    <div class="row">
       
        <div class="col-md-12"><h1>Dashboard</h1></div>
     
        <h3>จัดการผลิตภัณฑ์ที่จำหน่าย</h3>
        <div class="col-md-4">
            <a href="{{route('admin.brand')}}"><button class="button">Brand</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.category')}}"><button class="button">Category</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.group')}}"><button class="button">Group Product</button></a>
        </div>
        <!-- <div class="col-md-4">
            <a href="{{route('admin.networktype')}}"><button class="button">Network type</button></a>
        </div> -->
        <div class="col-md-4">
            <a href="{{route('admin.products')}}"><button class="button">Products</button></a>
        </div>


        <h3 class="mt-3 mb-3">จัดการข้อมูลหน้าต่างๆ</h3>
        <div class="col-md-4">
            <a href="{{route('admin.homes')}}"><button class="button">รูปภาพหน้าหลัก</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.productpreview')}}"><button class="button">Product Preview <br>หน้าหลัก</button></a>
        </div>
        <!-- เกี่ยวกับเรา บริการ -->
        <div class="col-md-4">
            <a href="{{route('admin.post')}}"><button class="button">หน้าข่าวสารเเละกิจกรรม</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.AdminNewProducts')}}"><button class="button">ผลิตภัณฑ์ใหม่สำหรับ<br>หน้าข่าวสารเเละกิจกรรม</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.download')}}"><button class="button">ดาวน์โหลด</button></a>
        </div>

        <div class="col-md-4">
            <a href="{{route('admin.customaboutus',['about_id'=>'1'])}}"><button class="button">เกี่ยวกับเรา</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.customservice',['service_id'=>'1'])}}"><button class="button">บริการ</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.post')}}"><button class="button">หน้าข่าวสารเเละกิจกรรม</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.AdminNewProducts')}}"><button class="button">ผลิตภัณฑ์ใหม่สำหรับ<br>หน้าข่าวสารเเละกิจกรรม</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.download')}}"><button class="button">ดาวน์โหลด</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.customforwork',['forwork_id'=>'1'])}}"><button class="button">ร่วมงานกับเรา</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.customcontact',['contact_id'=>'1'])}}"><button class="button">ติดต่อเรา</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.footer',['footer_id'=>'1'])}}"><button class="button">Footer</button></a>
        </div>
        
        <h3 class="mt-3 mb-3">อื่นๆ</h3>
        <div class="col-md-4">
            <a href="{{route('admin.Dealer')}}"><button class="button">จัดการบัญชี Dealer</button></a>
        </div>
        <div class="col-md-4">
            <a href="{{route('admin.AllOrder')}}"><button class="button">คำสั่งซื้อทั้งหมด</button></a>
        </div>
    </div>
</div>

<style>
.All{
    background: #f1f1f1; 
    width: 80%; 
    display: block; 
    margin: auto; 
    border-radius: 20px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
}
.row{
    text-align: center;
    margin-top: 5%;
    margin-bottom: 10%;
}
.col-md-4{ 
    margin-top: 3%;
    margin-bottom: 3%;
}

.col-md-12 h1{
    margin-bottom: 5%;
    padding: 1% 0;
    background: whitesmoke;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    font-weight: bold;
    border-radius: 20px;
}

h3{
    text-align: start;
    margin-left: 5%;
    font-weight: bold;
    color: #194276;
}

.button{
    border: none;
    box-shadow: 0 2px 5px rgba(136, 136, 136, 0.897);
    font-size: 16px;
    color: #FFF;
    padding: 8px 8px;
    width: 200px;
    background-color: #194276;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.button:hover{
    background: rgb(222, 226, 236);
    color: #194276;
}

@media(max-width: 1200px){
    .All{
        width: 90%; 
    }
}
@media(max-width: 767px){
    .col-md-4{
        margin: 5% 0;
    }
    .col-md-12 h1{
        margin-bottom: 10%;
        padding: 2% 0;
        font-size: 35px;
}
}
</style>