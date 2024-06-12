
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Add a Product'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            <div class="media mb-4 justify-content-end">
                <a href="<?php echo e(route('admin.product-list')); ?>" class="btn btn-sm  btn-primary mr-2">
                    <span><i class="fas fa-arrow-left"></i> <?php echo app('translator')->get('Back'); ?></span>
                </a>
            </div>

            <form method="post" action="<?php echo e(route('admin.product-store')); ?>" class="form-row justify-content-center">
                <?php echo csrf_field(); ?>
                <div class="col-md-8">

                <div class="row ">
                    <div class=" col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Name'); ?></label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo app('translator')->get('Product Name'); ?>" class="form-control" >
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Description'); ?></label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category_id">
                              <option value="1">Electronics</option>
                              <option value="2">Food</option>
                              <option value="3">Vehicle</option>
                            </select>
                            <?php $__errorArgs = ['badge'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label for="subcategory">Sub Category</label>
                            <select class="form-control" id="subcategory" name="subcategory_id">
                              <option value="1">Gents</option>
                              <option value="2">Womens</option>
                              <option value="3">Baby</option>
                            </select>
                            <?php $__errorArgs = ['badge'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Price'); ?></label>
                            <input type="number" name="price" value="<?php echo e(old('price')); ?>" placeholder="<?php echo app('translator')->get('Product Price'); ?>" class="form-control" >
                            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Discount Percentage'); ?></label>
                            <input type="number" name="discount" value="<?php echo e(old('discount')); ?>" min="0" max="100" placeholder="<?php echo app('translator')->get('eg, 5%, 25%'); ?>" class="form-control" >
                            <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    
                    <div class=" col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Point'); ?></label>
                            <input type="number" name="point" value="<?php echo e(old('point')); ?>" placeholder="<?php echo app('translator')->get('Points for the Product'); ?>" class="form-control" >
                            <?php $__errorArgs = ['point'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Stock'); ?></label>
                            <input type="number" name="stock" value="<?php echo e(old('stock')); ?>" placeholder="<?php echo app('translator')->get('Stock'); ?>" class="form-control" >
                            <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>







                </div>


                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3"><span><i
                            class="fas fa-save pr-2"></i> <?php echo app('translator')->get('Save'); ?></span></button>

                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
    <script>
        "use strict";
        $(document).on('change','#plan_price_type', function () {
            var isCheck = $(this).prop('checked');
            if (isCheck == false) {
                $('.rangeAmount').addClass('d-block');
                $('.fixedAmount').removeClass('d-block');
                $('.fixedAmount').addClass('d-none');
            } else {
                $('.rangeAmount').removeClass('d-block');
                $('.fixedAmount').addClass('d-block');
            }
        });

        $(document).on('change','#is_lifetime', function () {
            var isCheck = $(this).prop('checked');

            if(isCheck == false){
                $('.repeatable').removeClass('d-block');
                $('.repeatable').addClass('d-none');
            }else {
                $('.repeatable').removeClass('d-none');
                $('.repeatable').addClass('d-block');
            }

        });

        $(document).ready(function () {
            $('select[name=schedule]').select2({
                selectOnClose: true
            });
        });


    </script>

    <?php if($errors->any()): ?>
        <?php
            $collection = collect($errors->all());
            $errors = $collection->unique();
        ?>
        <script>
            "use strict";
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Notiflix.Notify.Failure("<?php echo e(trans($error)); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\laravel\Softtech\test_event\resources\views/admin/product/create.blade.php ENDPATH**/ ?>