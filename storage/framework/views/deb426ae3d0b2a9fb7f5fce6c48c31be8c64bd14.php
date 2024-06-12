<!-- PAGE-BANNER -->
<style>
    .page-banner {
        background-image: url(<?php echo e(getFile(config('location.logo.path').'banner.jpg')); ?>);
    }
</style>

<?php if(!request()->routeIs('home')): ?>
    <!-- page banner -->
    <section class="page-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                <h2><?php echo $__env->yieldContent('title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /PAGE-BANNER -->
<?php endif; ?>
<?php /**PATH K:\laravel\Softtech\copy-project\resources\views/themes/deepblack/partials/banner.blade.php ENDPATH**/ ?>