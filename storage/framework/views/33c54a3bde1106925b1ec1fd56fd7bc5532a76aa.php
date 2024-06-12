<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en" <?php if(session()->get('rtl') == 1): ?> dir="rtl" <?php endif; ?> >
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'assets/bootstrap/bootstrap.min.css')); ?>" />

    <?php echo $__env->yieldPushContent('css-lib'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'assets/plugins/owlcarousel/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'assets/plugins/owlcarousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'assets/plugins/owlcarousel/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'assets/plugins/aos/aos.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'assets/plugins/radial-progress/radialprogress.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'assets/jquery/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'scss/flags.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset($themeTrue.'scss/style.css')); ?>">
    <script src="<?php echo e(asset($themeTrue.'js/modernizr.custom.js')); ?>"></script>

<?php echo $__env->yieldPushContent('style'); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body  <?php if(session()->get('rtl') == 1): ?> class="rtl" <?php endif; ?>>
    <div class="wrapper">
        <!------ sidebar ------->
        <?php echo $__env->make($theme.'partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!------- Nav + Content ---------->
        <div id="content">
           <div class="overlay">
              <!----- navbar ------>
              <nav class="navbar navbar-expand-lg fixed-top">
                 <div class="container-fluid">
                    <a class="navbar-brand golden-text" href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(getFile(config('location.logoIcon.path').'logo.png')); ?>"
                             alt="<?php echo e(config('basic.site_title')); ?>">
                    </a>
                    <button
                       type="button"
                       id="sidebarCollapse"
                       class="sidebar-toggler p-0"
                    >
                       <img src="<?php echo e(asset($themeTrue.'img/icon/hamburger.png')); ?>" alt="<?php echo app('translator')->get('hamburger image'); ?>"/>
                    </button>

                    <span class="navbar-text" id="pushNotificationArea">
                       <!---- notification panel ---->
                       <?php echo $__env->make($theme.'partials.pushNotify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                       <!---- user panel ---->
                       <div class="notification-panel user-panel">
                            <button class="dropdown-toggle">
                                <img src="<?php echo e(getFile(config('location.user.path').auth()->user()->image)); ?>" class="user-image" alt="<?php echo app('translator')->get('user img'); ?>" />
                            </button>
                            <ul class="notification-dropdown user-dropdown">
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('user.home')); ?>">
                                        <img src="<?php echo e(asset($themeTrue.'img/icon/layout.png')); ?>" alt="<?php echo app('translator')->get('Dashboard'); ?>"/>
                                        <span class="golden-text"><?php echo e(trans('Dashboard')); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('user.profile')); ?>">
                                        <img src="<?php echo e(asset($themeTrue.'img/icon/profile.png')); ?>" alt="<?php echo app('translator')->get('My Profile'); ?>"/>
                                        <span class="golden-text"><?php echo app('translator')->get('My Profile'); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('user.twostep.security')); ?>">
                                        <img src="<?php echo e(asset($themeTrue.'/img/icon/padlock.png')); ?>" alt="<?php echo app('translator')->get('2FA Security'); ?>"/>
                                        <span class="golden-text"><?php echo app('translator')->get('2FA Security'); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <img src="<?php echo e(asset($themeTrue.'/img/icon/log-out.png')); ?>" alt="<?php echo app('translator')->get('Logout'); ?>"/>
                                        <span class="golden-text"><?php echo app('translator')->get('Logout'); ?></span>
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </li>
                            </ul>
                       </div>
                    </span>
                 </div>
              </nav>

              <!------------- others main dashboard body content ------------>
              <?php echo $__env->yieldContent('content'); ?>

           </div>
        </div>
    </div>


     <!-- scroll top icon -->
    <a href="#" class="scroll-top">
        <img src="<?php echo e(asset($themeTrue.'img/icon/up-arrow2.png')); ?>" alt="<?php echo app('translator')->get('scroll to top'); ?>" />
    </a>

    <!-- start preloader -->
    <div id="preloader">
        <img src="<?php echo e(asset($themeTrue.'img/bitcoin.gif')); ?>" alt="<?php echo app('translator')->get('preloader'); ?>" class="loader" />
    </div>
    <!-- end preloader -->


<?php echo $__env->yieldPushContent('loadModal'); ?>

<script src="<?php echo e(asset($themeTrue.'assets/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/jquery/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/jquery/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/plugins/owlcarousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/plugins/counterup/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/plugins/counterup/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/plugins/aos/aos.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/plugins/radial-progress/radialprogress.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'js/jquery.flagstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset($themeTrue.'assets/fontawesome/fontawesome.min.js')); ?>"></script>

<?php echo $__env->yieldPushContent('extra-js'); ?>

<script src="<?php echo e(asset('assets/global/js/notiflix-aio-2.7.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/pusher.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/vue.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/axios.min.js')); ?>"></script>
<!-- custom script -->
<script src="<?php echo e(asset($themeTrue.'js/script.js')); ?>"></script>


<script>
    'use strict';

    // dashboard sidebar
    document.getElementById("sidebarCollapse").addEventListener("click", () => {
        document.getElementById("sidebar").classList.toggle("active");
        document.getElementById("content").classList.toggle("active");
    });

    // for datepicker
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $("#salutation").selectmenu();
    });

    let pushNotificationArea = new Vue({
        el: "#pushNotificationArea",
        data: {
            items: [],
        },
        beforeMount() {
            this.getNotifications();
            this.pushNewItem();
        },
        methods: {
            getNotifications() {
                let app = this;
                axios.get("<?php echo e(route('user.push.notification.show')); ?>")
                    .then(function (res) {
                        app.items = res.data;
                    })
            },
            readAt(id, link) {
                let app = this;
                let url = "<?php echo e(route('user.push.notification.readAt', 0)); ?>";
                url = url.replace(/.$/, id);
                axios.get(url)
                    .then(function (res) {
                        if (res.status) {
                            app.getNotifications();
                            if (link != '#') {
                                window.location.href = link
                            }
                        }
                    })
            },
            readAll() {
                let app = this;
                let url = "<?php echo e(route('user.push.notification.readAll')); ?>";
                axios.get(url)
                    .then(function (res) {
                        if (res.status) {
                            app.items = [];
                        }
                    })
            },
            pushNewItem() {
                let app = this;
                // Pusher.logToConsole = true;
                let pusher = new Pusher("<?php echo e(env('PUSHER_APP_KEY')); ?>", {
                    encrypted: true,
                    cluster: "<?php echo e(env('PUSHER_APP_CLUSTER')); ?>"
                });
                let channel = pusher.subscribe('user-notification.' + "<?php echo e(Auth::id()); ?>");
                channel.bind('App\\Events\\UserNotification', function (data) {
                    app.items.unshift(data.message);
                });
                channel.bind('App\\Events\\UpdateUserNotification', function (data) {
                    app.getNotifications();
                });
            }
        }
    });
</script>

<?php echo $__env->yieldPushContent('script'); ?>


<?php if(session()->has('success')): ?>
    <script>
        Notiflix.Notify.Success("<?php echo app('translator')->get(session('success')); ?>");
    </script>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <script>
        Notiflix.Notify.Failure("<?php echo app('translator')->get(session('error')); ?>");
    </script>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <script>
        Notiflix.Notify.Warning("<?php echo app('translator')->get(session('warning')); ?>");
    </script>
<?php endif; ?>


<?php echo $__env->make('plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH K:\laravel\Softtech\test_event\resources\views/themes/deepblack/layouts/user.blade.php ENDPATH**/ ?>