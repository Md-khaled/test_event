<?php if(isset($templates['deposit-withdraw'][0]) && $depositWithdraw = $templates['deposit-withdraw'][0]): ?>
    <?php if( 0 < (count($deposits) +count($withdraws))): ?>
    <section class="transaction-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="header-text text-center">
                    <h5><?php echo app('translator')->get(@$depositWithdraw->description->title); ?></h5>
                    <h2><?php echo app('translator')->get(@$depositWithdraw->description->sub_title); ?></h2>
                    <p><?php echo app('translator')->get(@$depositWithdraw->description->short_title); ?></p>
                    <div class="button-group">
                       <button
                          data-id="lastDeposit"
                          class="transaction-tab active"
                       >
                        <?php echo e(trans('Last Deposit')); ?>

                        </button>
                       <button data-id="lastWithdraw" class="transaction-tab">
                        <?php echo e(trans('Last Withdrawal')); ?>

                       </button>
                    </div>
                 </div>
              </div>
           </div>

           <!-- last deposit content -->
           <div id="lastDeposit" class="row transaction-content active justify-content-center">
            <?php $__currentLoopData = $deposits->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-6 col-lg-3 mb-4">
                 <div
                    class="box"
                    data-aos="fade-right"
                    data-aos-duration="1200"
                    data-aos-anchor-placement="center-bottom"
                 >
                    <h4 class="golden-text"><?php echo e(optional($item->user)->fullname); ?></h4>
                    <h5><?php echo e(dateTime($item->created_at)); ?></h5>
                    <div class="img-box">
                       <img src="<?php echo e(getFile(config('location.user.path').optional($item->user)->image)); ?>" alt="<?php echo app('translator')->get('doposit user image'); ?>"/>
                    </div>
                    <h2><small><sup><?php echo e($basic->currency_symbol); ?></sup></small><?php echo e(getAmount($item->amount)); ?></h2>
                 </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>

           <!-- last withdraw content -->
           <div id="lastWithdraw" class="row transaction-content justify-content-center">
            <?php $__currentLoopData = $withdraws->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-6 col-lg-3 mb-4">
                 <div
                    class="box"
                    data-aos="fade-right"
                    data-aos-duration="1200"
                    data-aos-anchor-placement="center-bottom"
                 >
                    <h4 class="golden-text"><?php echo e(optional($item->user)->fullname); ?></h4>
                    <h5><?php echo e(dateTime($item->created_at)); ?></h5>
                    <div class="img-box">
                       <img src="<?php echo e(getFile(config('location.user.path').optional($item->user)->image)); ?>" alt="<?php echo app('translator')->get('withdrawal user image'); ?>" />
                    </div>
                    <h2><small><sup><?php echo e($basic->currency_symbol); ?></sup></small><?php echo e(getAmount($item->amount)); ?></h2>
                 </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
        </div>
    </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH K:\laravel\Softtech\copy-project\resources\views/themes/deepblack/sections/deposit-withdraw.blade.php ENDPATH**/ ?>