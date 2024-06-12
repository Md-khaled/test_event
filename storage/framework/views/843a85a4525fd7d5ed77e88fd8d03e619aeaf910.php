
<?php if(isset($templates['hero'][0]) && $hero = $templates['hero'][0]): ?>

<?php $__env->startPush('style'); ?>
    <style>
        .home-banner {
            height: 105vh;
            background: url(<?php echo e(getFile(config('location.content.path').@$hero->templateMedia()->background_image)); ?>);
            background-size: cover;
            background-position: center top;
            overflow: hidden;
        }
    </style>
<?php $__env->stopPush(); ?>
    <!-- home banner -->
    <section class="home-banner">
        <div class="overlay h-100 pt-5">
            <div class="container h-100">
                <div class="row h-100 pt-5 align-items-center justify-content-around">
                    <div class="col-lg-7">
                        <div class="text-box">
                            <h1>
                                <?php echo app('translator')->get(@$hero['description']->title); ?> <br />
                                <span><?php echo app('translator')->get(@$hero['description']->sub_title); ?></span>
                            </h1>
                            <p><?php echo app('translator')->get(@$hero['description']->short_description); ?></p>
                            <a href="<?php echo e(@$hero->templateMedia()->button_link); ?>" class="gold-btn">
                                <?php echo app('translator')->get(@$hero['description']->button_name); ?>
                            </a>
                        </div>
                    </div>
                    <div
                    class="col-lg-5 text-right d-none d-lg-block animate__animated animate__bounce animate__delay-2s"
                    >
                    <img src="<?php echo e(getFile(config('location.content.path').@$hero->templateMedia()->image)); ?>" alt="<?php echo app('translator')->get('hero image'); ?>" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php /**PATH K:\laravel\Softtech\copy-project\resources\views/themes/deepblack/partials/heroBanner.blade.php ENDPATH**/ ?>