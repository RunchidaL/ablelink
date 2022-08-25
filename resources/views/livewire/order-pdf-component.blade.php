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
        <div class="row">
            <div class="col-4">
                <p class="desc">
                    Attn : <br>
                    Position : <br>
                    Company : {{$dealer->companyTH}}<br>
                    Address : {{$dealer->address}}  แขวง/ตำบล {{$dealer->subdistrict}} <br>
                    เขต/อำเภอ {{$dealer->district}} {{$dealer->county}} {{$dealer->zipcode}}<br>
                    E-Mail : {{$dealer->emailaddress}}<br>
                    Phone : {{$dealer->phonenumber}}<br>
                    Fax : <br>
                </p>
            </div>
            <div class="col-4">
                <p class="desc">
                    Attn : <br>
                    Position : <br>
                    Company : {{$dealer->companyTH}}<br>
                    Address : {{$dealer->address}}  แขวง/ตำบล {{$dealer->subdistrict}}<br>
                    เขต/อำเภอ {{$dealer->district}} {{$dealer->county}} {{$dealer->zipcode}}<br>
                    E-Mail : {{$dealer->emailaddress}}<br>
                    Phone : {{$dealer->phonenumber}}<br>
                    Fax : <br>
                </p>
            </div>

        </div>
        <b style="font-size:20px">รายการสินค้า</b>
        <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">ชื่อสินค้า</th>
            <th scope="col">ราคาต่อหน่วย</th>
            <th scope="col">จำนวน</th>
            <th scope="col">ราคา</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
            <td>Mark</td>
            </tr>

        </tbody>
        </table>

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
    .row {
        display: flex;
    }
    .col-4{
        width: 40%;
    }
    .desc{
        line-height: 1;
    }

</style>