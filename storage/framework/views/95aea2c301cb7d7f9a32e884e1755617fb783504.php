<?php $__env->startSection('title',trans($title)); ?>
<?php $__env->startSection('content'); ?>

<!-- My Referral -->
<section class="transaction-history mt-5 pt-5">
    <div class="container-fluid">
       <div class="row">
          <div class="col">
             <div class="header-text-full">
                <h2><?php echo e(trans($title)); ?></h2>
             </div>
          </div>
       </div>

       <section class="refferal-link">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="box text-white">
                            <h4 class="golden-text"><?php echo app('translator')->get('Referral Link'); ?></h4>
                            <div class="input-group">
                                <input
                                    type="text"
                                    value="<?php echo e(route('register.sponsor',[Auth::user()->username])); ?>"
                                    class="form-control"
                                    id="sponsorURL"
                                    readonly
                                />
                                <button class="gold-btn copytext" id="copyBoard" onclick="copyFunction()"><i class="fa fa-copy mx-1"></i><?php echo app('translator')->get('copy link'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>


                <?php if(0 < count($referrals)): ?>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-start " id="ref-label">
                            <div class="nav flex-column nav-pills mx-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php $__currentLoopData = $referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class=" nav-link <?php if($key == '1'): ?>   active  <?php endif; ?> " id="v-pills-<?php echo e($key); ?>-tab" href="javascript:void(0)" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo e($key); ?>"  role="tab" aria-controls="v-pills-<?php echo e($key); ?>" aria-selected="true"><?php echo app('translator')->get('Level'); ?> <?php echo e($key); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="tab-content w-90" id="v-pills-tabContent">
                                <?php $__currentLoopData = $referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == '1'): ?> show active  <?php endif; ?> " id="v-pills-<?php echo e($key); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo e($key); ?>-tab">
                                        <?php if( 0 < count($referral)): ?>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col"><?php echo app('translator')->get('Username'); ?></th>
                                                        <th scope="col"><?php echo app('translator')->get('Email'); ?></th>
                                                        <th scope="col"><?php echo app('translator')->get('Phone Number'); ?></th>
                                                        <th scope="col"><?php echo app('translator')->get('Joined At'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $__currentLoopData = $referral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>

                                                            <td data-label="<?php echo app('translator')->get('Username'); ?>">
                                                                <?php echo app('translator')->get($user->username); ?>
                                                            </td>
                                                            <td data-label="<?php echo app('translator')->get('Email'); ?>" class=""><?php echo e($user->email); ?></td>
                                                            <td data-label="<?php echo app('translator')->get('Phone Number'); ?>">
                                                                <?php echo e($user->mobile); ?>

                                                            </td>
                                                            <td data-label="<?php echo app('translator')->get('Joined At'); ?>">
                                                                <?php echo e(dateTime($user->created_at)); ?>

                                                            </td>

                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                        </div>
                    </div>
                </div>
                <?php endif; ?>



            </div>
        </section>

    </div>
 </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <script>
        "use strict";
        function copyFunction() {
            var copyText = document.getElementById("sponsorURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            Notiflix.Notify.Success(`Copied: ${copyText.value}`);
        }
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/user/referral.blade.php ENDPATH**/ ?>