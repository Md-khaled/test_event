<?php $__env->startSection('title',__('Login')); ?>

<?php $__env->startSection('content'); ?>

    <!-- login -->
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-box">
                    <form action="<?php echo e(route('login')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="box mb-4">
                            <h4 class="golden-text"><?php echo app('translator')->get('your email or username'); ?></h4>
                            <div class="input-group">
                                <div class="img">
                                    <img src="<?php echo e(asset($themeTrue.'img/icon/email2.png')); ?>" alt="<?php echo app('translator')->get('email img'); ?>" />
                                </div>
                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    placeholder="<?php echo app('translator')->get('Email Or Username'); ?>"
                                />
                            </div>
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger float-left"><?php echo app('translator')->get($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger float-left"><?php echo app('translator')->get($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="box mb-4">
                            <h4 class="golden-text">
                                <?php echo app('translator')->get('Your password'); ?>
                                <a href="<?php echo e(route('password.request')); ?>" class="golden-text"
                                ><?php echo app('translator')->get('Forget password?'); ?></a>
                            </h4>
                            <div class="input-group">
                                <div class="img">
                                    <img src="<?php echo e(asset($themeTrue.'img/icon/padlock.png')); ?>" alt="<?php echo app('translator')->get('password img'); ?>" />
                                </div>
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="<?php echo app('translator')->get('Password'); ?>"
                                />
                            </div>
                            <?php $__errorArgs = ['password'];
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


                        <?php if(basicControl()->reCaptcha_status_login): ?>
                            <div class="box mb-4 form-group">
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

                        <div class="mb-4 bottom">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    <?php echo e(old('remember') ? 'checked' : ''); ?>

                                    id="flexCheckDefault"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexCheckDefault"
                                >
                                    <?php echo app('translator')->get('Remember me'); ?>
                                </label>
                            </div>
                            <span class="text-end">
                                <p>
                                <?php echo app('translator')->get('New User?'); ?>
                                <a href="<?php echo e(route('register')); ?>" class="golden-text"><?php echo app('translator')->get('Register'); ?></a>
                                </p>
                            </span>
                        </div>
                        <button class="gold-btn-block" type="submit"><?php echo app('translator')->get('Sign in'); ?></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/auth/login.blade.php ENDPATH**/ ?>