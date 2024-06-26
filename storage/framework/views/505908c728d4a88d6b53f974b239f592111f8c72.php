<?php if(isset($templates['investment'][0]) && ($investment = $templates['investment'][0])): ?>
    <!-- plan start -->
    <section class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-text text-center">
                        <h5><?php echo app('translator')->get(@$investment->description->title); ?></h5>
                        <h2><?php echo app('translator')->get(@$investment->description->sub_title); ?></h2>
                        <p><?php echo app('translator')->get(@$investment->description->short_details); ?></p>
                    </div>
                </div>
            </div>

            <div class="row ">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $getTime = \App\Models\ManageTime::where('time', $data->schedule)->first();
                    ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="box" data-aos="fade-up" data-aos-duration="800"
                            data-aos-anchor-placement="center-bottom">
                            <img src="<?php echo e(asset('assets/uploads/dummy/image (1).jpg')); ?>" class="dummy-image" alt="<?php echo app('translator')->get('Product'); ?>" 
                            style="width: 100%; height: 200px; overflow:hidden; border-radius: 10px"/>
                            <h2><?php echo app('translator')->get($data->name); ?></h2>
                            <h3>
                                
                                <?php if($data->discount): ?>
                                    
                                    <s class="me-2 font-normal text-sm" style="font-size: 20px"> <?php echo e($data->price); ?> </s> <?php echo e($data->price - $data->price*($data->discount/100)); ?>

                                <?php else: ?>
                                    <?php echo e($data->price); ?>

                                <?php endif; ?>
                            </h3>
                            <div class="">
                                <span class="bg bg-black p-2 rounded ">
                                    <?php echo e(["Category 1", "Category 2", "Category 3", "Category 4"][$data->category_id]); ?>

                                </span>
                                <span class="bg bg-black p-2 ms-3 rounded ">
                                    <?php echo e(["Sub Category 1", "Sub Category 2", "Sub Category 3", "Sub Category 4"][$data->subcategory_id]); ?>

                                </span>
                            </div>

                            <div class="mt-2">
                                
                                <?php echo e(Str::words($data->description, 10)); ?>

                            </div>



                            
                            <?php if(($data->stock)): ?>
                                <button class="gold-btn btn investNow" type="button" data-price="<?php echo e($data->price); ?>"
                                    data-resource="<?php echo e($data); ?>"><?php echo app('translator')->get('Shop Now'); ?>
                                </button>
                            <?php else: ?>                                
                                <button class="gold-btn btn investNow" type="button" data-price="<?php echo e($data->price); ?>" disabled
                                    data-resource="<?php echo e($data); ?>"><?php echo app('translator')->get('Stock Out'); ?>
                                </button>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- plan end -->
<?php endif; ?>



<!-- INVEST-NOW MODAL -->
<div class="modal fade addFundModal" id="investNowModal" tabindex="-1" data-bs-backdrop="static" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title golden-text" id="exampleModalLabel"><?php echo app('translator')->get('Shop Now'); ?></h3>
                <button type="button" data-bs-dismiss="modal" class="btn-close btn-close-investment"
                    aria-label="Close">
                    <img src="<?php echo e(asset($themeTrue . 'img/icon/cross.png')); ?>" alt="<?php echo app('translator')->get('cross img'); ?>" />
                </button>
            </div>
            <div class="modal-body">
                <div class="form-block">
                    <form class="login-form" id="invest-form" action="<?php echo e(route('user.order-product')); ?>"
                        method="post">
                        <?php echo csrf_field(); ?>
                        <div class="signin">
                            <h2 class="title golden-text text-center plan-name"></h2>

                            <?php if($basic->theme == 'lightorange'): ?>
                                <p class="text-center price-range font-20 planDetails"></p>
                                <p class="text-center profit-details font-18 planDetails"></p>
                                <p class="text-center profit-validity pb-3 font-18 planDetails"></p>
                            <?php elseif($basic->theme == 'deepblack'): ?>
                                <p class="text-center price-range lebelFont"></p>
                                <p class="text-center profit-details lebelFont"></p>
                                <p class="text-center profit-validity pb-3 lebelFont"></p>
                            <?php else: ?>
                                <p class="text-success text-center price-range font-20"></p>
                                <p class="text-success text-center profit-details font-18"></p>
                                <p class="text-success text-center profit-validity pb-3 font-18"></p>
                            <?php endif; ?>

                            <div class="form-group mb-3">
                                <h5 class="mb-2 golden-text d-block modal_text_level"><?php echo app('translator')->get('Select Warehouse'); ?></h5>
                                <select class="form-control" name="warehouse">
                                    <?php if(auth()->guard()->check()): ?>
                                        <option value="warehouse1" class="bg-dark text-white"><?php echo app('translator')->get('Ware house 1'); ?></option>
                                        <option value="warehouse2" class="bg-dark text-white"><?php echo app('translator')->get('Ware house 2'); ?></option>
                                        <option value="warehouse3" class="bg-dark text-white"><?php echo app('translator')->get('Ware house 3'); ?></option>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <div class="box">
                                    <h5 class="golden-text"><?php echo app('translator')->get('Quantity'); ?></h5>
                                    <div class="input-group">
                                        <input type="number" class="invest-amount form-control" name="quantity"
                                            id="quantity" value="<?php echo e(old('quantity')); ?>" autocomplete="off"
                                            placeholder="<?php echo app('translator')->get('Enter Quantity'); ?>">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="box">
                                    <h5 class="golden-text"><?php echo app('translator')->get('Enter Voucher/Coupon Code'); ?></h5>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="voucher"
                                            id="voucher" value="<?php echo e(old('voucher')); ?>" autocomplete="off"
                                            placeholder="<?php echo app('translator')->get('Apply voucher'); ?>">
                                        
                                    </div>
                                </div>
                            </div>


                            <input type="hidden" name="product_id" class="plan-id" value="">

                            <div class="btn-area mb-30 modal-footer border-top-0 p-0">
                                <button type="submit" class="gold-btn w-100"><?php echo app('translator')->get('Order Now'); ?></button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- INVEST-NOW MODAL -->


<?php if($basic->theme == 'deepblue'): ?>
    <?php $__env->startPush('script'); ?>
        <script>
            "use strict";
            (function($) {
                $(document).on('click', '.investNow', function() {
                    $("#investNowModal").toggleClass("modal-open");
                    let data = $(this).data('resource');
                    let price = $(this).data('price');
                    let symbol = "<?php echo e(trans($basic->currency_symbol)); ?>";
                    let currency = "<?php echo e(trans($basic->currency)); ?>";
                    $('.price-range').text(`<?php echo app('translator')->get('Invest'); ?>: ${price}`);

                    if (data.fixed_amount == '0') {
                        $('.invest-amount').val('');
                        $('#amount').attr('readonly', false);
                    } else {
                        $('.invest-amount').val(data.fixed_amount);
                        $('#amount').attr('readonly', true);
                    }

                    $('.profit-details').html(
                        `<strong> <?php echo app('translator')->get('Interest'); ?>: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}  </strong>`
                        );
                    $('.profit-validity').html(
                        `<strong>  <?php echo app('translator')->get('Per'); ?> ${data.schedule} <?php echo app('translator')->get('hours'); ?> ,  ${(data.is_lifetime == '0') ? `${data.repeatable} <?php echo app('translator')->get('times'); ?>` : `<?php echo app('translator')->get('Lifetime'); ?>`} </strong>`
                        );
                    $('.plan-name').text(data.name);
                    $('.plan-id').val(data.id);
                });

                $(".btn-close-investment").on('click', function() {
                    $("#investNowModal").removeClass("modal-open");
                });

            })(jQuery);
        </script>

        <?php if(count($errors) > 0): ?>
            <script>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    Notiflix.Notify.Failure("<?php echo app('translator')->get($error); ?>");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </script>
        <?php endif; ?>
    <?php $__env->stopPush(); ?>
<?php elseif($basic->theme == 'deepblack'): ?>
    <?php $__env->startPush('script'); ?>
        <script>
            "use strict";
            (function($) {
                $(document).on('click', '.investNow', function() {
                    var planModal = new bootstrap.Modal(document.getElementById('investNowModal'))
                    planModal.show()
                    let data = $(this).data('resource');
                    let price = $(this).data('price');
                    let symbol = "<?php echo e(trans($basic->currency_symbol)); ?>";
                    let currency = "<?php echo e(trans($basic->currency)); ?>";
                    $('.price-range').text(`<?php echo app('translator')->get('Invest'); ?>: ${price}`);

                    if (data.fixed_amount == '0') {
                        $('.invest-amount').val('');
                        $('#amount').attr('readonly', false);
                    } else {
                        $('.invest-amount').val(data.fixed_amount);
                        $('#amount').attr('readonly', true);
                    }

                    $('.profit-details').html(
                        `<?php echo app('translator')->get('Interest'); ?>: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}`
                        );
                    $('.profit-validity').html(
                        `<?php echo app('translator')->get('Per'); ?> ${data.schedule} <?php echo app('translator')->get('hours'); ?> ,  ${(data.is_lifetime == '0') ? `${data.repeatable} <?php echo app('translator')->get('times'); ?>` : `<?php echo app('translator')->get('Lifetime'); ?>`}`
                        );
                    $('.plan-name').text(data.name);
                    $('.plan-id').val(data.id);
                    $('.show-currency').text("<?php echo e(config('basic.currency')); ?>");
                });

            })(jQuery);
        </script>

        <?php if(count($errors) > 0): ?>
            <script>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    Notiflix.Notify.Failure("<?php echo app('translator')->get($error); ?>");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </script>
        <?php endif; ?>
    <?php $__env->stopPush(); ?>
<?php else: ?>
    <?php $__env->startPush('script'); ?>
        <script>
            "use strict";
            (function($) {
                $(document).on('click', '.investNow', function() {
                    $("#modal-login").toggleClass("modal-open");
                    let data = $(this).data('resource');
                    let price = $(this).data('price');


                    let symbol = "<?php echo e(trans($basic->currency_symbol)); ?>";
                    let currency = "<?php echo e(trans($basic->currency)); ?>";


                    $('.price-range').text(`<?php echo app('translator')->get('Invest'); ?>: ${price}`);

                    if (data.fixed_amount == '0') {
                        $('.invest-amount').val('');
                        $('#amount').attr('readonly', false);
                    } else {
                        $('.invest-amount').val(data.fixed_amount);
                        $('#amount').attr('readonly', true);
                    }

                    $('.profit-details').html(
                        `<strong> <?php echo app('translator')->get('Interest'); ?>: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}  </strong>`
                        );
                    $('.profit-validity').html(
                        `<strong>  <?php echo app('translator')->get('Per'); ?> ${data.schedule} <?php echo app('translator')->get('hours'); ?> ,  ${(data.is_lifetime == '0') ? `${data.repeatable} <?php echo app('translator')->get('times'); ?>` : `<?php echo app('translator')->get('Lifetime'); ?>`} </strong>`
                        );
                    $('.plan-name').text(data.name);
                    $('.plan-id').val(data.id);
                });
            })(jQuery);
        </script>


        <?php if(count($errors) > 0): ?>
            <script>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    Notiflix.Notify.Failure("<?php echo app('translator')->get($error); ?>");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </script>
        <?php endif; ?>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH K:\laravel\Softtech\test_event\resources\views/themes/deepblack/sections/investment.blade.php ENDPATH**/ ?>