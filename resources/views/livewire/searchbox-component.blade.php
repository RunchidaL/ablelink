<div class="searchbox-wrap">
    <form action="{{route('product.search')}}" class="searchbox">
        <input type="text" value="{{$search}}" placeholder="Search">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>
</div>