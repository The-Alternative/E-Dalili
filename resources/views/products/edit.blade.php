@extends('layouts.app');

@section('content')
    @if(isset($product))
        <div class="card card-default">
            <div class="card-header">
                Update Product
            </div>
            <div class="card-body" id="user_table">
                <form action="{{ route('products.update', $product->id)  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($product))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="product">Product Name:</label>
                        <input type="text" class="@error('title') is-invalid
                     @enderror form-control" name="title" placeholder="Add a new product" value="{{ $product->title  }}">
                        @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product">product slug:</label>
                        <input type="text" class="@error('slug') is-invalid
                     @enderror form-control" name="slug" placeholder="Add product slug" value="{{ $product->slug }}">
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
                                @if( $product->brand_id == $brand->id )
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
                     @enderror form-control" name="barcode" placeholder="Add barcode" value="{{ $product->barcode }}" >
                        @error('barcode')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product">productcol:</label>
                        <input type="text" class="@error('productcol') is-invalid
                     @enderror form-control" name="productcol" placeholder="Add Productcol" value="{{ $product->productcol }}">
                        @error('productcol')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product">Meta:</label>
                        <input type="text" class="@error('meta') is-invalid
                     @enderror form-control" name="meta" placeholder="Add Meta" value="{{ $product->meta }}">
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
                                <input type="checkbox" name="is_active" aria-label="Checkbox for following text input" {{  $product->is_active ? "checked":"" }}>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <label for="product" style="padding-top: 5px; padding-right: 10px">Is Appear:</label>
                                <input type="checkbox" name="is_appear"  aria-label="Checkbox for following text input" {{ $product->is_appear ? "checked":"" }}>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product">Product Description:</label>
                        <textarea class="@error('description') is-invalid
                     @enderror form-control" name="description" aria-label="With textarea" placeholder="write description" >{{ $product->description }}</textarea>
                        @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                        @foreach($pimages as $pimage)
                            <div class="form-group iii">
                                <input type="hidden" value="1" name="icounter" id="icount">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 py-5">
                                            <label for="product image">Product image:</label>
                                            <input type="file" name="image[]" class="form-control"  value="{{$pimage->image}}">
                                        </div>
                                        <div class="col-md-4 py-5">
                                            <img src="{{ asset('storage/'.$pimage->image) }}" width="100px" height="50px">
                                        </div>
                                        <div class="col-md-3 py-5">
                                            <label>choice a cover</label>
                                            <div class="form-check" >
                                                @if($pimage->is_cover)
                                                    <input class="form-check-input" type="radio" name="iscover" id="coverRadio1" value="1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Is Cover
                                                    </label>
                                                @else
                                                    <input class="form-check-input" type="radio" name="iscover" id="coverRadio1" value="1" >
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Is Cover
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-2 py-5">
                                            <label>remove image</label>
                                            <span class="btn btn-danger ciii" onclick="ihandler()" >
                                    <i class="fa fa-trash" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
<?php $xx=0;
$yy=0;?>
                    @foreach($custom_fields as $custom1)
                        @foreach($custom1->products as $product2)
                            @if($product->id == $product2->pivot->product_id)
                                <?php $xx=$xx+1;?>
                                <div class="form-group csss">
                                    <input type="hidden" value="{{ $xx }}" name="counter" id="count">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5 py-5">
                                                <label for="selectCustom">
                                                    Custom field
                                                </label>
                                                <select name="custom_field[]" class="form-control" id="selectcategory" >
                                                    @foreach($custom_fields as $custom2)
                                                        @if( $custom2===$custom1)
                                                            <option value="{{ $custom2->id }}" selected >
                                                                {{$custom2->name}}
                                                            </option>
                                                        @else
                                                            <option value="{{ $custom2->id }}" >
                                                                {{$custom2->name}}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-5 py-5">
                                                <label for="cdescription">
                                                    value
                                                </label>
                                                <input type="text" class="form-control" name="value[]" placeholder="Add description" value="{{ $product2->pivot->value }}">
                                            </div>

                                            <div class="col-md-2 py-5">
                                                <label for="selectBrand">
                                                    clear
                                                </label>
                                                <span class="btn btn-danger"  >
                                                                                                                delete
                                                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    @endforeach
                        @foreach($categories as $category1)
                                @foreach($category1->products as $product1)
                                    @if($product->id == $product1->pivot->product_id)
                                        <?php $yy=$yy+1 ?>
                            <div class="form-group csss">
                                <input type="hidden" value="{{ $yy }}" name="ccounter" id="ccount">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 py-5">
                                            <label for="selectCategory">
                                                Category
                                            </label>
                                            <select name="category[]" class="form-control" id="selectcategory" >
                                                @foreach($categories as $category2)
                                                    @if( $category2===$category1)
                                                        <option value="{{ $category2->id }}" selected >
                                                            {{$category2->name}}
                                                        </option>
                                                    @else
                                                        <option value="{{ $category2->id }}" >
                                                            {{$category2->name}}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-5 py-5">
                                            <label for="cdescription">
                                                Description
                                            </label>
                                            <input type="text" class="form-control" name="cdescription[]" placeholder="Add description" value="{{ $product1->pivot->description }}">
                                        </div>

                                                                                                                <div class="col-md-2 py-5">
                                                                                                                    <label for="selectBrand">
                                                                                                                        clear
                                                                                                                    </label>
                                                                                                                    <span class="btn btn-danger"  >
                                                                                                                clear
                                                                                                            </span>
                                                                                                                </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        @endforeach


                    {{--                @if(isset($product))--}}
                    {{--                    <div class="form-group">--}}
                    {{--                        <div class="container">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-md-4 py-5">--}}
                    {{--                                    <label>Add image</label>--}}
                    {{--                                    <span class="btn btn-success ciii" onclick="ihandler()" >--}}
                    {{--                                    <i class="fa fa-plus" aria-hidden="true"></i></span>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-4 py-5">--}}
                    {{--                                    <label>Add Custom field</label>--}}
                    {{--                                    <span class="btn btn-success xxx" onclick="handler()" >--}}
                    {{--                                    <i class="fa fa-plus" aria-hidden="true"></i></span>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-4 py-5">--}}
                    {{--                                    <label>Add category</label>--}}
                    {{--                                    <span class="btn btn-success cxxx" onclick="chandler()" >--}}
                    {{--                                    <i class="fa fa-plus" aria-hidden="true"></i></span>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                @endif--}}
                    <div class="form-group">
                        <button class="btn btn-success" style="margin-top: 10px">
                            Update
                        </button>
                    </div>
                </form>
{{--                <div id="confirmModal" role="dialog">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                                <h2 class="modal-title">confirmation</h2>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <h4 align="center" style="margin: 0;"> are you sure</h4>--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>--}}
{{--                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    @endif
    <script>
        function ihandler() {
            $('.ciii').attr('class', 'hidden');
            $('.hidden').attr('onclick', '');
            var ai = document.getElementById('icount').value;
            var bi = parseInt(ai) + 1;
            document.getElementById('icount').value = bi.toString();
            // alert(bi);
            var g=document.getElementById('coverRadio'+(bi-1)).value;
            // alert(g);
            var t=parseInt(g) + 1;
            // alert(t);
            $('.iii').append(function () {
                return $('<div class="form-group">\n' +
                    '                    <div class="container">\n' +
                    '                        <div class="row">\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="product image">Product image:</label>\n' +
                    '                                <input type="file" name="image[]" class="form-control" placeholder="Add product image" >\n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label>choice a cover</label>\n' +
                    '                                <div class="form-check" >\n' +
                    '                                    <input class="form-check-input" type="radio" name="iscover" id="coverRadio'+t+'" value="'+t+'" >\n' +
                    '                                    <label class="form-check-label" for="exampleRadios1">\n' +
                    '                                        Is Cover\n' +
                    '                                    </label>\n' +
                    '                                </div>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-2 py-5">\n' +
                    '                                <label>Add image</label>\n' +
                    '                                <span class="btn btn-success ciii" onclick="ihandler()" >\n' +
                    '                                    <i class="fa fa-plus" aria-hidden="true"></i></span>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>');
            });

        }
    </script>
    <script>
        let x=0;
        function handler() {
            $('.xxx').attr('class','hidden');
            $('.hidden').attr('onclick','');
            var a=document.getElementById('count').value;
            var b = parseInt(a)+1;
            document.getElementById('count').value=b.toString();

            $('.sss').append(function() {
                return $('<div class="form-group">\n' +
                    '                    <div class="container">\n' +
                    '                        <div class="row">\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    select a custom field\n' +
                    '                                </label>\n' +
                    '                                <select name="custom_field[]" class="form-control" id="selectcustom_fields" >\n' +
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
                    '                                <input type="text" class="form-control" name="value[]" placeholder="Add value" value="{{ isset($product) ? $product->meta : "" }}">\n' +
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
    <script>
        function clearqq(){
            alert('are you shore')
        }
    </script>

    <script>
        function openForm() {
            var el = this;

            // Delete id
            var deleteid = $(this).data('id');
            alert(deleteid);
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <script>
        // var p_custom;
        // $(document).on('click','.delete',function (){
        //     p_custom=$(this).attr('id');
        //     $('#confirmModal').modal('show');
        // });
        // $('#ok_button').click(function (){
        //     $.ajax({
        //         url:"/product_customfields/destroy/"+p_custom,
        //         beforeSend:function (){
        //             $('#ok_button').text('Deleting...');
        //                              },
        //         success:function (data)
        //         {
        //             setTimeout(function (){
        //                 $('#confirmModal').modal('hide');
        //                 $('#user_table').DataTable().ajax.reload();
        //                 alert('Data Deleted');
        //             },2000)
        //         }
        //
        //     })
        // })
    </script>
@endsection

