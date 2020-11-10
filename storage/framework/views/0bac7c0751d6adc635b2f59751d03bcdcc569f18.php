;

<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header">
            <?php echo e(isset($product) ? "Update Product" : "Add New Product"); ?>

        </div>
        <div class="card-body">
            <form action="<?php echo e(isset($product) ?  route('products.update', $product->id) : route('products.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(isset($product)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>
                <div class="form-group">
                    <label for="product">Product Name:</label>
                    <input type="text" class="<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="title" placeholder="Add a new product" value="<?php echo e(isset($product) ? $product->title : ""); ?>">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="product">product slug:</label>
                    <input type="text" class="<?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="slug" placeholder="Add product slug" value="<?php echo e(isset($product) ? $product->slug : ""); ?>">
                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="selectBrand">
                        select a brand
                    </label>
                    <select name="brand_id" class="form-control" id="selectBrand" >
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($product) and $product->brand_id == $brand->id ): ?>
                                <option value="<?php echo e($brand->id); ?>" selected >
                                    <?php echo e($brand->name); ?>

                                </option>
                            <?php else: ?>
                                <option value="<?php echo e($brand->id); ?>" >
                                    <?php echo e($brand->name); ?>

                                </option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product">barcode:</label>
                    <input type="text" class="<?php $__errorArgs = ['barcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="barcode" placeholder="Add barcode" value="<?php echo e(isset($product) ? $product->barcode : ""); ?>" >
                    <?php $__errorArgs = ['barcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="product">productcol:</label>
                    <input type="text" class="<?php $__errorArgs = ['productcol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="productcol" placeholder="Add Productcol" value="<?php echo e(isset($product) ? $product->productcol : ""); ?>">
                    <?php $__errorArgs = ['productcol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="product">Meta:</label>
                    <input type="text" class="<?php $__errorArgs = ['meta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="meta" placeholder="Add Meta" value="<?php echo e(isset($product) ? $product->meta : ""); ?>">
                    <?php $__errorArgs = ['meta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label for="product" style="padding-top: 5px; padding-right: 10px">Is Active:</label>
                            <input type="checkbox" name="is_active" aria-label="Checkbox for following text input" <?php echo e(isset($product) ? $product->is_active ? "checked":"" : ""); ?>>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label for="product" style="padding-top: 5px; padding-right: 10px">Is Appear:</label>
                            <input type="checkbox" name="is_appear"  aria-label="Checkbox for following text input" <?php echo e(isset($product) ? $product->is_appear ? "checked":"" : ""); ?>>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product">Product Description:</label>
                    <textarea class="<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="description" aria-label="With textarea" placeholder="write description" ><?php echo e(isset($product) ? $product->description : ""); ?></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <?php if(isset($product)): ?>
                    <?php $__currentLoopData = $pimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group iii">
                    <input type="hidden" value="1" name="icounter" id="icount">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 py-5">
                                <label for="product image">Product image:</label>
                                <input type="file" name="image[]" class="form-control"  value="<?php echo e($pimage->image); ?>">
                            </div>
                            <div class="col-md-4 py-5">
                                <img src="<?php echo e(asset('storage/'.$pimage->image)); ?>" width="100px" height="50px">
                            </div>
                            <div class="col-md-3 py-5">
                                <label>choice a cover</label>
                                <div class="form-check" >
                                    <?php if($pimage->is_cover): ?>
                                    <input class="form-check-input" type="radio" name="iscover" id="coverRadio1" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Is Cover
                                    </label>
                                    <?php else: ?>
                                        <input class="form-check-input" type="radio" name="iscover" id="coverRadio1" value="1" >
                                        <label class="form-check-label" for="exampleRadios1">
                                            Is Cover
                                        </label>
                                    <?php endif; ?>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="form-group iii">
                        <input type="hidden" value="1" name="icounter" id="icount">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 py-5">
                                    <label for="product image">Product image:</label>
                                    <input type="file" name="image[]" class="form-control" placeholder="Add product image" >
                                </div>
                                <div class="col-md-5 py-5">
                                    <label>choice a cover</label>
                                    <div class="form-check" >
                                        <input class="form-check-input" type="radio" name="iscover" id="coverRadio1" value="1" >
                                        <label class="form-check-label" for="exampleRadios1">
                                            Is Cover
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2 py-5">
                                    <label>Add image</label>
                                    <span class="btn btn-success ciii" onclick="ihandler()" >
                                    <i class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(isset($product)): ?>
                <?php $__currentLoopData = $pcustoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pcustom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group sss">
                            <input type="hidden" value="1" name="counter" id="count">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 py-5">
                                        <label for="selectBrand">
                                            custom field
                                        </label>
                                        <select name="custom_field[]" class="form-control" id="selectcustom_fields" >
                                            <?php $__currentLoopData = $custom_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(isset($product) and $pcustom->custom_field_id == $custom->id ): ?>
                                                    <option value="<?php echo e($custom->id); ?>" selected >
                                                        <?php echo e($custom->name); ?>

                                                    </option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($custom->id); ?>" >
                                                        <?php echo e($custom->name); ?>

                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-5 py-5">
                                        <label for="selectBrand">
                                            value
                                        </label>
                                        <input type="text" class="form-control" name="value[]" placeholder="Add value" value="<?php echo e(isset($product) ? $pcustom->value : ""); ?>">
                                    </div>
                                    <div class="col-md-2 py-5">
                                        <span class="btn btn-danger" data-id="<?php echo e($pcustom->id); ?>" onclick="openForm()">clear</span>
                                        <input type="hidden" class="select" value="<?php echo e($pcustom->id); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php else: ?>
                    <div class="form-group sss">
                        <input type="hidden" value="1" name="counter" id="count">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 py-5">
                                    <label for="selectBrand">
                                        select a custom field
                                    </label>
                                    <select name="custom_field[]" class="form-control" id="selectcustom_fields" >
                                        <?php $__currentLoopData = $custom_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(isset($product) and $product->brand_id == $custom->id ): ?>
                                                <option value="<?php echo e($custom->id); ?>" selected >
                                                    <?php echo e($custom->name); ?>

                                                </option>
                                            <?php else: ?>
                                                <option value="<?php echo e($custom->id); ?>" >
                                                    <?php echo e($custom->name); ?>

                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-5 py-5">
                                    <label for="selectBrand">
                                        Add value
                                    </label>
                                    <input type="text" class="form-control" name="value[]" placeholder="Add value" value="<?php echo e(isset($product) ? $product->meta : ""); ?>">

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
                <?php endif; ?>
                <?php if(isset($product)): ?>
                    <?php $__currentLoopData = $pcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group csss">
                            <input type="hidden" value="1" name="ccounter" id="ccount">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 py-5">
                                        <label for="selectCategory">
                                            Category
                                        </label>
                                        <select name="category[]" class="form-control" id="selectcategory" >
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(isset($product) and $pcategory->category_id == $category->id ): ?>
                                                    <option value="<?php echo e($category->id); ?>" selected >
                                                        <?php echo e($category->name); ?>

                                                    </option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($category->id); ?>" >
                                                        <?php echo e($category->name); ?>

                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 py-5">
                                        <label for="cdescription">
                                            Description
                                        </label>
                                        <input type="text" class="form-control" name="cdescription[]" placeholder="Add description" value="<?php echo e(isset($product) ? $pcategory->description : ""); ?>">
                                    </div>








                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php else: ?>
                    <div class="form-group csss">
                        <input type="hidden" value="1" name="ccounter" id="ccount">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 py-5">
                                    <label for="selectCategory">
                                        select a category
                                    </label>
                                    <select name="category[]" class="form-control" id="selectcategories" >
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(isset($product) and $product->brand_id == $custom->id ): ?>
                                                <option value="<?php echo e($category->id); ?>" selected >
                                                    <?php echo e($category->name); ?>

                                                </option>
                                            <?php else: ?>








                                                <option value="<?php echo e($category->id); ?>" >
                                                    <?php echo e($category->name); ?>

                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-5 py-5">
                                    <label for="category description">
                                        Add Description
                                    </label>
                                    <input type="text" class="form-control" name="cdescription[]" placeholder="Add description" value="<?php echo e(isset($product) ? $product->meta : ""); ?>">

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
                <?php endif; ?>























                <div class="form-group">
                    <button class="btn btn-success" style="margin-top: 10px">
                        <?php echo e(isset($product) ? "Update" : "Add"); ?>

                    </button>
                </div>
            </form>











        </div>
    </div>
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
                    '                                    <?php $__currentLoopData = $custom_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>\n' +
                    '                                        <?php if(isset($product) and $product->brand_id == $custom->id ): ?>\n' +
                    '                                            <option value="<?php echo e($custom->id); ?>" selected >\n' +
                    '                                                <?php echo e($custom->name); ?>\n' +
                    '                                            </option>\n' +
                    '                                        <?php else: ?>\n' +
                    '                                            <option value="<?php echo e($custom->id); ?>" >\n' +
                    '                                                <?php echo e($custom->name); ?>\n' +
                    '                                            </option>\n' +
                    '                                        <?php endif; ?>\n' +
                    '                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>\n' +
                    '                                </select>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    Add value\n' +
                    '                                </label>\n' +
                    '                                <input type="text" class="form-control" name="value[]" placeholder="Add value" value="<?php echo e(isset($product) ? $product->meta : ""); ?>">\n' +
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
                    '                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>\n' +
                    '                                        <?php if(isset($product) and $product->brand_id == $category->id ): ?>\n' +
                    '                                            <option value="<?php echo e($category->id); ?>" selected >\n' +
                    '                                                <?php echo e($category->name); ?>\n' +
                    '                                            </option>\n' +
                    '                                        <?php else: ?>\n' +
                    '                                            <option value="<?php echo e($category->id); ?>" >\n' +
                    '                                                <?php echo e($category->name); ?>\n' +
                    '                                            </option>\n' +
                    '                                        <?php endif; ?>\n' +
                    '                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>\n' +
                    '                                </select>\n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-5 py-5">\n' +
                    '                                <label for="selectBrand">\n' +
                    '                                    Add Description\n' +
                    '                                </label>\n' +
                    '                                <input type="text" class="form-control" name="cdescription[]" placeholder="Add Description" value="<?php echo e(isset($product) ? $product->meta : ""); ?>">\n' +
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\edalely\resources\views/products/create.blade.php ENDPATH**/ ?>