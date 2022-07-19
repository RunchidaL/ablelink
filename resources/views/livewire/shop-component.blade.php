<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        <div>
            <h2 class="text">ผลิตภัณฑ์ทั้งหมด</h2>
        </div>
        <div class="row" id="products">
            @foreach($products as $product)
            <div class="NP-col">
                <div class="card">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-wrapper">
                        <img src="{{asset('/images/products')}}/{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                                <p class="card-title">{{$product->slug}}, {{$product->name}}</p>
                            @if(($product->web_price) == '1')
                                <p class="empty">฿</p>
                            @else
                                <p>฿{{number_format($product->customer_price,2)}}</p>
                            @endif
                        </div>
                        <div class="card-footer">
                            <button type='button' class="button btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->customer_price}})"><span>Add to cart</span></button>
                        </div>
                    </a>    
                </div>
            </div>
            @endforeach
            <div class="paginate">
                <div style="text-align: center">{{$products->links()}}</div>
            </div>
        </div>
    </div>
</div>



{{-- <div class="pagination">
<ul>{{$products->links()}}</ul>
</div>

<script src="script.js"></script>

<style>
.pagination ul{
width: 30%;
display: flex;
flex-wrap: wrap;
background: #fff;
padding: 8px;
border-radius: 50px;
box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
margin-left: 20%;
}
.pagination ul li{
color: #20B2AA;
list-style: none;
line-height: 45px;
text-align: center;
font-size: 18px;
font-weight: 500;
cursor: pointer;
user-select: none;
transition: all 0.3s ease;
}
.pagination ul li.numb{
list-style: none;
height: 45px;
width: 45px;
margin: 0 3px;
line-height: 45px;
border-radius: 50%;
}
.pagination ul li.numb.first{
margin: 0px 3px 0 -5px;
}
.pagination ul li.numb.last{
margin: 0px -5px 0 3px;
}
.pagination ul li.dots{
font-size: 22px;
cursor: default;
}
.pagination ul li.btn{
padding: 0 20px;
border-radius: 50px;
}
.pagination li.active,
.pagination ul li.numb:hover,
.pagination ul li:first-child:hover,
.pagination ul li:last-child:hover{
color: #fff;
background: #20B2AA;
}    
</style>

<script>
// selecting required element
const element = document.querySelector(".pagination ul");
let totalPages = 20;
let page = 10;

//calling function with passing parameters and adding inside element which is ul tag
element.innerHTML = createPagination(totalPages, page);
function createPagination(totalPages, page){
let liTag = '';
let active;
let beforePage = page - 1;
let afterPage = page + 1;
if(page > 1){ //show the next button if the page value is greater than 1
liTag += `<li class="btn prev" onclick="createPagination(totalPages, ${page - 1})"><span><i class="fas fa-angle-left"></i> Prev</span></li>`;
}

if(page > 2){ //if page value is less than 2 then add 1 after the previous button
liTag += `<li class="first numb" onclick="createPagination(totalPages, 1)"><span>1</span></li>`;
if(page > 3){ //if page value is greater than 3 then add this (...) after the first li or page
    liTag += `<li class="dots"><span>...</span></li>`;
}
}

// how many pages or li show before the current li
if (page == totalPages) {
beforePage = beforePage - 2;
} else if (page == totalPages - 1) {
beforePage = beforePage - 1;
}
// how many pages or li show after the current li
if (page == 1) {
afterPage = afterPage + 2;
} else if (page == 2) {
afterPage  = afterPage + 1;
}

for (var plength = beforePage; plength <= afterPage; plength++) {
if (plength > totalPages) { //if plength is greater than totalPage length then continue
    continue;
}
if (plength == 0) { //if plength is 0 than add +1 in plength value
    plength = plength + 1;
}
if(page == plength){ //if page is equal to plength than assign active string in the active variable
    active = "active";
}else{ //else leave empty to the active variable
    active = "";
}
liTag += `<li class="numb ${active}" onclick="createPagination(totalPages, ${plength})"><span>${plength}</span></li>`;
}

if(page < totalPages - 1){ //if page value is less than totalPage value by -1 then show the last li or page
if(page < totalPages - 2){ //if page value is less than totalPage value by -2 then add this (...) before the last li or page
    liTag += `<li class="dots"><span>...</span></li>`;
}
liTag += `<li class="last numb" onclick="createPagination(totalPages, ${totalPages})"><span>${totalPages}</span></li>`;
}

if (page < totalPages) { //show the next button if the page value is less than totalPage(20)
liTag += `<li class="btn next" onclick="createPagination(totalPages, ${page + 1})"><span>Next <i class="fas fa-angle-right"></i></span></li>`;
}
element.innerHTML = liTag; //add li tag inside ul tag
return liTag; //reurn the li tag
}
</script> --}}