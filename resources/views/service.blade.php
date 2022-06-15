@extends('layout.navfoot')
@section('link_service')
<link href="/css/service.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('service')
<div class="wallpaper">
    <img src="/images/service.jpg" alt="">
</div>

<div class="row">
    <div class="col">
        <div class="box">
            <img src="/images/shipping.png">
        </div>
        <h4>Shipping & Delivery</h4>
        <p>ค่าบริการจัดส่งสินค้าต่างจังหวัด</p>
        <p>ยอดสั่งซื้อขั่นต่ำ 10,000 บาท ขึ้นไป</p>
        <p>จัดส่งฟรีระยะเวลาการจัดส่ง 5-7 วันทำการ</p>
        <p>ยอดสั่งซื้อขั้นต่ำ 3,000 บาท บริการจัดส่งฟรี</p>
        <p>(เฉพาะเขตกรุงเทพฯ และปริมณฑล)</p>
    </div>

    <div class="col">
        <div class="box">
            <img src="/images/customerService.png">
        </div>
        <h4>Customer Service</h4> 
        <p>การรับประกันสินค้าทุกรายการ</p>
        <p>จะต้องเกิดความบกพร่องของตัวสินค้า</p>
        <p>ลูกค้าสามารถส่งคืนสินค้าได้ทันที</p>
        <p>ตรวจสอบสถานะของสินค้า การจัดส่งและส่งคืนได้ที่</p>
        <li>Tel : 086-339-2814</li>
        <li>ID LINE : @focomm</li>
        <li>Facebook : focomm cabling</li>
        <li>Email : info@focomm-cabling.com</li>
    </div>

    <div class="col">
        <div class="box">
            <img src="/images/warranty.png">
        </div>
        <h4>Warranty</h4>
        <p>การรับประกันสินค้าทุกรายการ</p>
        <p>จะต้องเกิดความบกพร่องของตัวสินค้า</p>
        <p>เนื่องจากการใช้งานปกติ</p>
        <p>หรือเกิดจากความผิดพลาดในการผลิต</p>
        <p>หรือสาเหตุจากความผิดผลาดของบริษัทผู้ขาย</p>
        <p>ไม่ครอบคลุมการใช้งานผิดประเภท</p>
        <p>อุบัติเหตุหรือภัยธรรมชาติต่างๆ</p>
    </div>
</div>
@endsection
