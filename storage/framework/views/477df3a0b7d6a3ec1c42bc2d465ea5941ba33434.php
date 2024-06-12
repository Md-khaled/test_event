<?php $__env->startSection('title',__('Register')); ?>


<?php $__env->startSection('content'); ?>
    <!-- register start -->
    <section class="login-section register-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="login-box">
                    <form action="<?php echo e(route('register')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <?php if(session()->get('sponsor') != null): ?>
                                  <div class="col-md-12">
                                        <div class="box sponsorboxwidth">
                                            <h4 class="golden-text"><?php echo app('translator')->get('Sponsor Name'); ?></h4>
                                            <div class="input-group mb-4">
                                                <div class="img">
                                                    <img src="<?php echo e(asset($themeTrue.'img/icon/bonus.png')); ?>" alt="<?php echo app('translator')->get('sponsor img'); ?>" />
                                                </div>
                                                <input type="text" name="sponsor" id="sponsor" class="form-control" placeholder="<?php echo e(trans('Sponsor By')); ?>" value="<?php echo e(session()->get('sponsor')); ?>" readonly/>
                                            </div>
                                        </div>
                                  </div>
                            <?php endif; ?>

                            <div class="col-md-6">
                                <div class="box mb-4">
                                    <h4 class="golden-text"><?php echo app('translator')->get('First Name'); ?></h4>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="<?php echo e(asset($themeTrue.'img/icon/edit.png')); ?>" alt="<?php echo app('translator')->get('first name img'); ?>" />
                                        </div>
                                        <input type="text" name="firstname" class="form-control" value="<?php echo e(old('firstname')); ?>" placeholder="<?php echo app('translator')->get('First Name'); ?>"/>
                                    </div>
                                    <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box mb-4">
                                    <h4 class="golden-text"><?php echo app('translator')->get('Last Name'); ?></h4>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="<?php echo e(asset($themeTrue.'img/icon/edit.png')); ?>" alt="<?php echo app('translator')->get('lastname img'); ?>" />
                                        </div>
                                        <input type="text" name="lastname" class="form-control" value="<?php echo e(old('lastname')); ?>" placeholder="<?php echo app('translator')->get('Last Name'); ?>"/>
                                    </div>
                                    <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box mb-4">
                                    <h4 class="golden-text"><?php echo app('translator')->get('Username'); ?></h4>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="<?php echo e(asset($themeTrue.'img/icon/edit.png')); ?>" alt="<?php echo app('translator')->get('username img'); ?>" />
                                        </div>
                                        <input type="text" name="username" class="form-control" value="<?php echo e(old('username')); ?>" placeholder="<?php echo app('translator')->get('Username'); ?>"/>
                                    </div>
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box mb-4">
                                    <h4 class="golden-text"><?php echo app('translator')->get('Email Address'); ?></h4>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="<?php echo e(asset($themeTrue.'img/icon/email2.png')); ?>" alt="<?php echo app('translator')->get('email img'); ?>" />
                                        </div>
                                        <input type="text" name="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->get('Email Address'); ?>"/>
                                    </div>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-12 phonenumber">
                                <div class="form-group mb-30">
                                    <?php
                                        $country_code = (string) @getIpInfo()['code'] ?: null;
                                        $myCollection = collect(config('country'))->map(function($row) {
                                            return collect($row);
                                        });
                                        $countries = $myCollection->sortBy('code');
                                    ?>

                                    <div class="box mb-4">
                                        <h4 class="golden-text"><?php echo app('translator')->get('Phone Number'); ?></h4>
                                        <div class="input-group">
                                            <div class="input-group-prepend w-50">
                                                <select name="phone_code" class="form-control country_code dialCode-change">
                                                    <?php $__currentLoopData = config('country'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($value['phone_code']); ?>"
                                                                data-name="<?php echo e($value['name']); ?>"
                                                                data-code="<?php echo e($value['code']); ?>"
                                                            <?php echo e($country_code == $value['code'] ? 'selected' : ''); ?>

                                                        > <?php echo e($value['name']); ?> (<?php echo e($value['phone_code']); ?>)
                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <input type="text" name="phone" class="form-control dialcode-set" value="<?php echo e(old('phone')); ?>" placeholder="<?php echo app('translator')->get('Phone Number'); ?>">
                                        </div>
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>


                                    <input type="hidden" name="country_code" value="<?php echo e(old('country_code')); ?>" class="text-dark">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="box mb-4">
                                    <h4 class="golden-text"><?php echo app('translator')->get('Password'); ?></h4>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="<?php echo e(asset($themeTrue.'img/icon/padlock.png')); ?>" alt="<?php echo app('translator')->get('password img'); ?>" />
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="<?php echo app('translator')->get('Password'); ?>"/>
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box mb-4">
                                    <h4 class="golden-text"><?php echo app('translator')->get('Confirm Password'); ?></h4>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="<?php echo e(asset($themeTrue.'img/icon/padlock.png')); ?>" alt="<?php echo app('translator')->get('Confirm Password img'); ?>" />
                                        </div>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="<?php echo app('translator')->get('Confirm Password'); ?>"/>
                                    </div>
                                </div>
                            </div>

                            <?php if(basicControl()->reCaptcha_status_registration): ?>
                                <div class="col-md-6 box mb-4 form-group">
                                    <?php echo NoCaptcha::renderJs(session()->get('trans')); ?>

                                    <?php echo NoCaptcha::display($basic->theme == 'deepblack' ? ['data-theme' => 'dark'] : []); ?>

                                    <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger mt-1"><?php echo app('translator')->get($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            <?php endif; ?>

                            <div class="mb-4 col-md-12 logindiv">
                                <p>
                                    <?php echo app('translator')->get('already User?'); ?>
                                    <a href="<?php echo e(route('login')); ?>" class="golden-text"><?php echo app('translator')->get('login'); ?></a>
                                </p>
                                <button type="submit" class="gold-btn"><?php echo app('translator')->get('Sign Up'); ?></button>
                            </div>
                        </div>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </section>
    <!-- register end -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        $(document).ready(function () {
            setDialCode();
            $(document).on('change', '.dialCode-change', function () {
                setDialCode();
            });
            function setDialCode() {
                let currency = $('.dialCode-change').val();
                $('.dialcode-set').val(currency);
            }
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\laravel\Softtech\test_event\resources\views/themes/deepblack/auth/register.blade.php ENDPATH**/ ?>