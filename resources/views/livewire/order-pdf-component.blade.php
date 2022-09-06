<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
            <div class="column">
                <img src="{{ public_path('images/AbleLink.jpg') }}" id="logo">
            </div>
            <div class="column text-end">
                <p>บริษัท เอเบิลลิ้งค์ (ประเทศไทย) จำกัด เลขประจำตัวผู้เสียภาษี 0-10556-1132-34-1</p>
                <p>12 ซอยสุขาภิบาล 5 ซอย 5 แยก 3 แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ</p>
                <p>Tel : 02-973-1966-67  www.ablelink.co.th / info@ablelink.co.th</p>
            </div>
        </div>
        <h3 class="text-center">QUOTATION</h3>
        <p class="Pro">No.1 of the ICT Product</p>
        <div style="height: 3px; background: black"></div>
        <div class="left1">
            <p class="desc">
                Attn : <br>
                Position : <br>
                Company : {{$dealer->companyTH}}<br>
                Address : {{$dealer->address}}  แขวง/ตำบล {{$dealer->subdistrict}} <br>
                เขต/อำเภอ {{$dealer->district}} {{$dealer->county}} {{$dealer->zipcode}}<br>
                E-Mail : {{$dealer->emailaddress}}<br>
                Phone : {{$dealer->phonenumber}}<br>
                Fax : 
            </p>
        </div>
        <div class="right1">
            <p class="desc">
                Quotation No. : <br>
                Presale Checklist : <br>
                Date : {{$dealer->companyTH}}<br>
                Revised Date : {{$dealer->address}}  แขวง/ตำบล {{$dealer->subdistrict}}<br>
                Page No. : {{$dealer->district}} {{$dealer->county}} {{$dealer->zipcode}}<br>
                Sale :  {{$dealer->emailaddress}}<br>
                Mobile :  {{$dealer->phonenumber}}<br>
                validity : <br>
                Project :
            </p>
        </div>
        
        <h6 style="clear: both;"></h6>

        Ablelink (Thailand) Co., Ltd. Would like to thank you for your trust to selected services, products and we pround to offer quotation as :-
        <table>
            <tr style="height: 5px">
                <th style="width: 5%; ">No</th>
                <th style="width: 10%;">Brand</th>
                <th style="width: 10%;">Model</th>
                <th style="width: 30%;">Description</th>
                <th style="width: 10%;">Quantity</th>
                <th style="width: 10%;">Unit</th>
                <th style="width: 15%;">Unit Price (Baht)</th>
                <th style="width: 10%;">Amount (Baht)</th>
            </tr>

            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
            </tr>

            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
            </tr>

            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
                <td>$100</td>
            </tr>

            

            <tr>
                <td rowspan="3"></td>
                <td rowspan="3"></td>
                <td rowspan="3"></td>
                <td rowspan="3" colspan="2" style="color: red">หมายเหตุ xxxxxxxx</td>
                <td class="blast" colspan="2">&nbsp;    Total</td>
                <td class="last"><strong>-  &nbsp;</strong></td>
            </tr>

            <tr>
                <td class="blast" colspan="2">&nbsp;    Vat 7%</td>
                <td class="last"><strong>-  &nbsp;</strong></td>
            </tr>

            <tr>
                <td colspan="2"><strong style="font-size: 20px;">Grand Total</strong></td>
                <td class="last"><strong>-  &nbsp;</strong></td>
            </tr>
        </table>
    
   
        <div class="left2">
            <p class="desc">
                <strong style="text-decoration: underline">Sales Terms & Conditions</strong> <br>
                rice validity :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________<br>
                Delivery Time :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________<br>
                Term Of Payment :&nbsp;&nbsp;&nbsp;__________________________________________________ <br>
                Warranty :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________<br>
                Remarks :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________<br>
                <strong>ยอดสั่งซื้อขั้นต่ำ 10,000 บาท ขึ้นไป จัดส่งฟรีระยะเวลาการจัดส่ง 5-7 วันทำการ</strong> <br>
                <strong>ยอดสั่งซื้อขั้นต่ำ 3,000 บาท บริการจัดส่งฟรี (เฉพาะเขตกรุงเทพฯ เเละปริมณฑล)</strong>
            </p>
        </div>
        <div class="right2">
            <p class="desc">
                <strong>รายละเอียดการโอนเงิน</strong> <br>
                บริษัท เอเบิลลิ้งค์(ประเทศไทย)จำกัด <br>
                ธ. กสิกรไทย สาขา บิ๊กซี สุขาภิบาล 5 <br>
                044-3-94752-3 <br>
                <strong>**โอนเข้าบัญชีหรือเขียนเช็คเท่านั้น</strong>
            </p>
        </div>

        <h1 style="clear: both;"></h1>

        <div class="left3">
            <p style="margin-left: 25%">Approved by</p> <br>
            <div style="height: 2px; width: 300px; background: black;"></div>
            <p class="desc">
                I accept the above terms & conditions. <br>
                Hereby, I allow Ablelink Co., Ltd. to process the purchasing of the products on my behalf.
            </p>
        </div>
        <div class="right3">
            <p style="text-align: center">Sincerely Yours,</p> <br>
            <div style="height: 2px; width: 200px; background: black;"></div>
            <p style="text-align: center">
                xxxxxxxxx
            </p>
        </div>

        <h1 style="clear: both;"></h1>
        <h1 style="visibility: hidden;">tab</h1>

        <div class="right4">
            <div style="height: 2px; width: 200px; background: black;"></div>
            <p style="text-align: center">Authorized Signature</p>
            <p style="text-align: center">
                Date ……./……./…….
            </p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>

<style>

    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: bold;
        src: url("{{ public_path('fonts/THSarabunNewBold.ttf') }}") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: normal;
        src: url("{{ public_path('fonts/THSarabunNewItalic.ttf') }}") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: bold;
        src: url("{{ public_path('fonts/THSarabunNewBoldItalic.ttf') }}") format('truetype');
    }

    body{
    font-family: 'THSarabunNew', sans-serif;
    }

    #logo
    {
        height: 4.375rem;
    }

    .column {
        float: left;
        width: 50%;
        line-height: 0.5;
    }
    .desc{
        line-height: 1;
    }
    .Pro{
        color: red;
        position: absolute;
        right: 2px;
        top: 85px;
    }
    .left1{
        float: left;
        width: 50%;
    }
    .right1{
        float: right;
        width: 50%;
    }
    
    table{
        width: 100%;
    }
    table, td, th {
        border: 2px solid black;
    }
    th {
        background: rgb(190, 190, 190);
    }
    tr{
        text-align: center
    }

    .left2{
        float: left;
    }
    .right2{
        float: right;
    }
    .left3{
        float: left;
    }
    .right3{
        float: right;
    }
    .right4{
        float: right;
    } 
    .blast{
        text-align: left;
    }
    .last{
        text-align: right;
    }

</style>