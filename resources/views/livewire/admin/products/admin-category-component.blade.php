<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" id="head">
                    <div class="col-md-4">
                        <h2><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  All Category</h2>
                    </div>
                    <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.addcategory')}}"><button class="btn btn-success">Add Category</button></a>
                    </div>
                </div>
                <table class="table table-striped">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>slug</th>
                            <th>SubCategory</th>
                            <th>Brand</th>
                            <th>SubBrand</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <ul class="slist">
                                        @foreach($category->subCategories as $scategory)   
                                            <li>{{$scategory->name}}
                                                <a href="{{route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                                <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubcategory({{$scategory->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                            </li>
                                            @foreach($scategory->brandCategories as $bcategory)
                                                @foreach($bcategory->subbrandCategories as $sbcategory)
                                                <br>
                                                @endforeach
                                            <br>
                                            @endforeach
                                        @endforeach
                                    </ul> 
                                </td>
                                <td class="sub-name">
                                    <ul class="slist">
                                        @foreach($category->subCategories as $scategory)
                                            @foreach($scategory->brandCategories as $bcategory)
                                                <li>{{$bcategory->brands->name}}
                                                    <a href="{{route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug,'bcategory_slug'=>$bcategory->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteBrandcategory({{$bcategory->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                                </li>
                                                @foreach($bcategory->subbrandCategories as $sbcategory)
                                                <br>
                                                @endforeach
                                            @endforeach
                                            <br>
                                        @endforeach
                                    </ul> 
                                </td>
                                <td class="sub-name">
                                    <ul class="slist">
                                        @foreach($category->subCategories as $scategory)
                                            @foreach($scategory->brandCategories as $bcategory)
                                                @foreach($bcategory->subbrandCategories as $sbcategory)
                                                <li>{{$sbcategory->name}}
                                                    <a href="{{route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug,'bcategory_slug'=>$bcategory->id,'sbcategory_slug'=>$sbcategory->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubBrandcategory({{$sbcategory->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                                </li>
                                                @endforeach
                                                <br>
                                            @endforeach
                                            <br>
                                        @endforeach
                                    </ul> 
                                </td>
                                <td>
                                    <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"><i class="bi bi-pencil-square" id="edit"></i></a>
                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})"><i class="bi bi-x" id="edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    #head{
        margin: 2% 0 2% 0;
    }
    #edit{
        color:black;
        font-size: 25px;
    }
    #editsub{
        color:black;
        font-size: 15px;
    }
    .sub-name{
        width:20%;
    }
</style>