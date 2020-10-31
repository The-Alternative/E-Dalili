@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($product) ? "Update Product" : "Add New Product" }}
        </div>
        <div class="card-body">
            <form action="{{ isset($product) ?  route('products.update', $product->id) : route('products.store')   }}" method="POST">
                @csrf
                @if(isset($product))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="product">Product Name:</label>
                    <input type="text" class="@error('title') is-invalid
                     @enderror form-control" name="title" placeholder="Add a new product" value="{{ isset($product) ? $product->title : "" }}">
                    @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="product">product slug:</label>
                    <input type="text" class="@error('slug') is-invalid
                     @enderror form-control" name="slug" placeholder="Add product slug" value="{{ isset($product) ? $product->slug : "" }}">
                    @error('slug')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="selectBrand">
                        select a brand
                    </label>
                    <select name="brand_id" class="form-control" id="selectBrand" >
                        @foreach($brands as $brand)
                            @if(isset($product) and $product->brand_id == $brand->id )
                                <option value="{{ $brand->id }}" selected >
                                    {{$brand->name}}
                                </option>
                            @else
                                <option value="{{ $brand->id }}" >
                                    {{$brand->name}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product">barcode:</label>
                    <input type="text" class="@error('barcode') is-invalid
                     @enderror form-control" name="barcode" placeholder="Add barcode" value="{{ isset($product) ? $product->barcode : "" }}" >
                    @error('barcode')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="product">productcol:</label>
                    <input type="text" class="@error('productcol') is-invalid
                     @enderror form-control" name="productcol" placeholder="Add Productcol" value="{{ isset($product) ? $product->productcol : "" }}">
                    @error('productcol')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="product">Meta:</label>
                    <input type="text" class="@error('meta') is-invalid
                     @enderror form-control" name="meta" placeholder="Add Meta" value="{{ isset($product) ? $product->meta : "" }}">
                    @error('meta')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label for="product" style="padding-top: 5px; padding-right: 10px">Is Active:</label>
                            <input type="checkbox" name="is_active" aria-label="Checkbox for following text input" {{ isset($product) ? $product->is_active ? "checked":"" : "" }}>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label for="product" style="padding-top: 5px; padding-right: 10px">Is Appear:</label>
                            <input type="checkbox" name="is_appear"  aria-label="Checkbox for following text input" {{ isset($product) ? $product->is_appear ? "checked":"" : "" }}>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product">Product Description:</label>
                    <textarea class="@error('description') is-invalid
                     @enderror form-control" name="description" aria-label="With textarea" placeholder="write description" >{{ isset($product) ? $product->description : "" }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <form>
                @if(isset($product))
                @foreach($pcustoms as $pcustom)
                        <div class="form-group sss">
                            <input type="hidden" value="1" name="counter" id="count">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 py-5">
                                        <label for="selectBrand">
                                            custom field
                                        </label>
                                        <select name="custom_field[]" class="form-control" id="selectcustom_fields" >
                                            @foreach($custom_fields as $custom)
                                                @if(isset($product) and $pcustom->custom_field_id == $custom->id )
                                                    <option value="{{ $custom->id }}" selected >
                                                        {{$custom->name}}
                                                    </option>
                                                @else
                                                    <option value="{{ $custom->id }}" >
                                                        {{$custom->name}}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 py-5">
                                        <label for="selectBrand">
                                            value
                                        </label>
                                        <input type="text" class="form-control" name="value[]" placeholder="Add value" value="{{ isset($product) ? $pcustom->value : "" }}">
                                    </div>
{{--                                    <div class="col-md-2 py-5">--}}
{{--                                        <label for="selectBrand">--}}
{{--                                            clear--}}
{{--                                        </label>--}}
{{--                                        <span class="btn btn-danger" onclick="clearqq()" >--}}
{{--                                    clear--}}
{{--                                </span>--}}
{{--                                    </div>--}}
                                    <button> delerte</button>

                                </div>
                            </div>
                        </div>
                </form>
                @endforeach

                @else
                    <div class="form-group sss">
                        <input type="hidden" value="1" name="counter" id="count">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 py-5">
                                    <label for="selectBrand">
                                        select a custom field
                                    </label>
                                    <select name="custom_field[{'cf',cf}]" class="form-control" id="selectcustom_fields" >
                                        @foreach($custom_fields as $custom)
                                            @if(isset($product) and $product->brand_id == $custom->id )
                                                <option value="{{ $custom->id }}" selected >
                                                    {{$custom->name}}
                                                </option>
                                            @else
                                                <option value="{{ $custom->id }}" >
                                                    {{$custom->name}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5 py-5">
                                    <label for="selectBrand">
                                        Add value
                                    </label>
                                    <input type="text" class="form-control" name="custom_field[{'val',val}]" placeholder="Add value" value="{{ isset($product) ? $product->meta : "" }}">

                                </div>
                                <div class="col-md-2 mt-5">
                                    <label for="selectBrand">
                                        Add value
                                    </label>
                                    <span class="btn btn-success xxx" onclick="handler()" >
                                    Add
                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($product))
                    @foreach($pcategories as $pcategory)
                        <div class="form-group csss">
                            <input type="hidden" value="1" name="ccounter" id="ccount">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 py-5">
                                        <label for="selectCategory">
                                            Category
                                        </label>
                                        <select name="category[]" class="form-control" id="selectcategory" >
                                            @foreach($categories as $category)
                                                @if(isset($product) and $pcategory->category_id == $category->id )
                                                    <option value="{{ $category->id }}" selected >
                                                        {{$category->name}}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}" >
                                                        {{$category->name}}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 py-5">
                                        <label for="cdescription">
                                            Description
                                        </label>
                                        <input type="text" class="form-control" name="cdescription[]" placeholder="Add description" value="{{ isset($product) ? $pcategory->description : "" }}">
                                    </div>
{{--                                                                        <div class="col-md-2 py-5">--}}
{{--                                                                            <label for="selectBrand">--}}
{{--                                                                                clear--}}
{{--                                                                            </label>--}}
{{--                                                                            <span class="btn btn-danger" onclick="clearqq()" >--}}
{{--                                                                        clear--}}
{{--                                                                    </span>--}}
{{--                                                                        </div>--}}
                                </div>
                            </div>
                        </div>

                    @endforeach

                @else
                    <div class="form-group csss">
                        <input type="hidden" value="1" name="ccounter" id="ccount">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 py-5">
                                    <label for="selectCategory">
                                        select a category
                                    </label>
                                    <select name="category[]" class="form-control" id="selectcategories" >
                                        @foreach($categories as $category)
                                            @if(isset($product) and $product->brand_id == $custom->id )
                                                <option value="{{ $category->id }}" selected >
                                                    {{$category->name}}
                                                </option>
                                            @else
{{--                                                @if(!$category->parent_id)--}}
{{--                                                <optgroup label="{{$category->category}}">--}}
{{--                                                    --}}
{{--                                                        <option value="{{$category->categories->id}}">--}}
{{--                                                            {{$category->categories->name}}--}}
{{--                                                        </option>--}}
{{--                                                </optgroup>--}}
{{--                                                @endif--}}
                                                <option value="{{ $category->id }}" >
                                                    {{$category->name}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5 py-5">
                                    <label for="category description">
                                        Add Description
                                    </label>
                                    <input type="text" class="form-control" name="cdescription[]" placeholder="Add description" value="{{ isset($product) ? $product->meta : "" }}">

                                </div>
                                <div class="col-md-2 mt-5">
                                    <label for="selectBrand">
                                        Add Decription
                                    </label>
                                    <span class="btn btn-success cxxx" onclick="chandler()" >
                                    Add
                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <button class="btn btn-success" style="margin-top: 10px">
                        {{ isset($product) ? "Update" : "Add" }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let x=0;
        var cf;
        function handler() {
            $('.xxx').attr('class','hidden');
            $('.hidden').attr('onclick','');
            var a=document.getElementById('count').value;
            var b = parseInt(a)+1;
            document.getElementById('count').value=b.toString();
            //cf[{'cf',document.getE}]
            // let b=a.parseInt();
            // alert(b)
            // b=b+1;
            // a=toString(b);
            // alert(a)

            // alert(document.getElementById('xxx').className)

            $('.sss').append(function() {
                return $('<div class="form-group">\n' +
                    '                    <div class="container">\n' +
                    '                        <div class="row">\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    select a custom field\n' +
                    '                                </label>\n' +
                    '                                <select name="custom_field[{\'val\',val}]" class="form-control" id="selectcustom_fields" >\n' +
                    '                                    @foreach($custom_fields as $custom)\n' +
                    '                                        @if(isset($product) and $product->brand_id == $custom->id )\n' +
                    '                                            <option value="{{ $custom->id }}" selected >\n' +
                    '                                                {{$custom->name}}\n' +
                    '                                            </option>\n' +
                    '                                        @else\n' +
                    '                                            <option value="{{ $custom->id }}" >\n' +
                    '                                                {{$custom->name}}\n' +
                    '                                            </option>\n' +
                    '                                        @endif\n' +
                    '                                    @endforeach\n' +
                    '                                </select>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    Add value\n' +
                    '                                </label>\n' +
                    '                                <input type="text" class="form-control" name="custom_field[{\'val\',val}]" placeholder="Add value" value="{{ isset($product) ? $product->meta : "" }}">\n' +
                    '                               \n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-2 mt-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    Add value\n' +
                    '                                </label>\n' +
                    '                                <span class="btn btn-success xxx" onclick="handler()" >\n' +
                    '                                    Add\n' +
                    '                                </span>\n' +
                    '                            </div>\n' +
                    '\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>');
            });
            x=x+1;
            // alert(x);
            // document.getElementById('xxx'+x).setAttribute("class","hidden");
        }




    </script>
    <script>
        let y=0;
        function chandler() {
            $('.cxxx').attr('class','hidden');
            $('.hidden').attr('onclick','');
            var a=document.getElementById('ccount').value;
            var b = parseInt(a)+1;
            document.getElementById('ccount').value=b.toString();
            // let b=a.parseInt();
            // alert(b)
            // b=b+1;
            // a=toString(b);
            // alert(a)

            // alert(document.getElementById('xxx').className)

            $('.csss').append(function() {
                return $('<div class="form-group">\n' +
                    '                    <div class="container">\n' +
                    '                        <div class="row">\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    select a category\n' +
                    '                                </label>\n' +
                    '                                <select name="category[]" class="form-control" id="selectcategories" >\n' +
                    '                                    @foreach($categories as $category)\n' +
                    '                                        @if(isset($product) and $product->brand_id == $category->id )\n' +
                    '                                            <option value="{{ $category->id }}" selected >\n' +
                    '                                                {{$category->name}}\n' +
                    '                                            </option>\n' +
                    '                                        @else\n' +
                    '                                            <option value="{{ $category->id }}" >\n' +
                    '                                                {{$category->name}}\n' +
                    '                                            </option>\n' +
                    '                                        @endif\n' +
                    '                                    @endforeach\n' +
                    '                                </select>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    Add Description\n' +
                    '                                </label>\n' +
                    '                                <input type="text" class="form-control" name="cdescription[]" placeholder="Add Description" value="{{ isset($product) ? $product->meta : "" }}">\n' +
                    '                               \n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-2 mt-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    Add Description\n' +
                    '                                </label>\n' +
                    '                                <span class="btn btn-success cxxx" onclick="chandler()" >\n' +
                    '                                    Add\n' +
                    '                                </span>\n' +
                    '                            </div>\n' +
                    '\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>');
            });
            x=x+1;
            // alert(x);
            // document.getElementById('xxx'+x).setAttribute("class","hidden");
        }
    </script>
@endsection

