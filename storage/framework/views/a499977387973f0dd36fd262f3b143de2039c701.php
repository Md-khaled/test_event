<?php $__env->startSection('title',trans('Dashboard')); ?>
<?php $__env->startSection('content'); ?>

    <!---- other balances ----->
    <section class="statistic-section mt-5 pt-5 pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2><?php echo app('translator')->get('dashboard'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="800"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/fund.png')); ?>" alt="<?php echo app('translator')->get('Main Balance'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Main Balance'); ?></h4>
                        <h2>
                            <small><sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup></small><?php echo e(getAmount($walletBalance, config('basic.fraction_number'))); ?>

                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/money-bag.png')); ?>" alt="<?php echo app('translator')->get('Interest Balance'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Interest Balance'); ?></h4>
                        <h2>
                            <small><sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup></small><?php echo e(getAmount($interestBalance, config('basic.fraction_number'))); ?>

                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="800"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/invest.png')); ?>" alt="<?php echo app('translator')->get('Total Deposit'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Total Deposit'); ?></h4>
                        <h2>
                            <small><sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup></small><?php echo e(getAmount($totalDeposit, config('basic.fraction_number'))); ?>

                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/pay-history.png')); ?>" alt="<?php echo app('translator')->get('Total Earn'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Total Earn'); ?></h4>
                        <h2>
                            <small><sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup></small><?php echo e(getAmount($totalInterestProfit, config('basic.fraction_number'))); ?>

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!---- charts ----->
    <section class="chart-information mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="progress-wrapper">
                        <div
                            id="container"
                            class="apexcharts-canvas"
                        ></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="progress-wrapper progress-wrapper-circle">
                        <div class="progress-container d-flex flex-column flex-sm-row justify-content-around">
                            <div class="circular-progress cp_1">
                                <svg
                                    class="radial-progress"
                                    data-percentage="<?php echo e(getPercent($roi['totalInvest'], $roi['completed'])); ?>"
                                    viewBox="0 0 80 80"
                                >
                                    <circle
                                        class="incomplete"
                                        cx="40"
                                        cy="40"
                                        r="35"
                                    ></circle>
                                    <circle
                                        class="complete"
                                        cx="40"
                                        cy="40"
                                        r="35"
                                        style="
                                    stroke-dashoffset: 39.58406743523136;
                                    "
                                    ></circle>
                                    <text
                                        class="percentage"
                                        x="50%"
                                        y="53%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"
                                    >
                                        <?php echo e(getPercent($roi['totalInvest'], $roi['completed'])); ?> %
                                    </text>
                                </svg>
                                <h4 class="golden-text mt-4 text-center">
                                    <?php echo app('translator')->get('Invest Completed'); ?>
                                </h4>
                            </div>

                            <div class="circular-progress cp_3">
                                <svg
                                    class="radial-progress"
                                    data-percentage="<?php echo e(100 - getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?>"
                                    viewBox="0 0 80 80"
                                >
                                    <circle
                                        class="incomplete"
                                        cx="40"
                                        cy="40"
                                        r="35"
                                    ></circle>
                                    <circle
                                        class="complete"
                                        cx="40"
                                        cy="40"
                                        r="35"
                                        style="
                                    stroke-dashoffset: 39.58406743523136;
                                    "
                                    ></circle>
                                    <text
                                        class="percentage"
                                        x="50%"
                                        y="53%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"
                                    >
                                        <?php echo e(100 - getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?> %
                                    </text>
                                </svg>

                                <h4 class="golden-text mt-4 text-center">
                                    <?php echo app('translator')->get('ROI Speed'); ?>
                                </h4>
                            </div>

                            <div class="circular-progress cp_2">
                                <svg
                                    class="radial-progress"
                                    data-percentage="<?php echo e(getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?>"
                                    viewBox="0 0 80 80"
                                >
                                    <circle
                                        class="incomplete"
                                        cx="40"
                                        cy="40"
                                        r="35"
                                    ></circle>
                                    <circle
                                        class="complete"
                                        cx="40"
                                        cy="40"
                                        r="35"
                                        style="
                                    stroke-dashoffset: 147.3406954533613;
                                    "
                                    ></circle>
                                    <text
                                        class="percentage"
                                        x="50%"
                                        y="53%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"
                                    >
                                        <?php echo e(getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?> %
                                    </text>
                                </svg>

                                <h4 class="golden-text mt-4 text-center">
                                    <?php echo app('translator')->get('ROI Redeemed'); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!----- account balances ----->
    <section class="statistic-section mt-5 pt-5 pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2 class="text-center"><?php echo app('translator')->get('Account Statistics'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="800"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/money-bag.png')); ?>" alt="<?php echo app('translator')->get('Total Invest'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Total Invest'); ?></h4>
                        <h2>
                            <small><sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup></small><?php echo e(getAmount($roi['totalInvestAmount'])); ?>

                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/payout.png')); ?>" alt="<?php echo app('translator')->get('Total Payout'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Total Payout'); ?></h4>
                        <h2>
                            <small><sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup></small><?php echo e(getAmount($totalPayout)); ?>

                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="800"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/support.png')); ?>" alt="<?php echo app('translator')->get('Total Ticket'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Total Ticket'); ?></h4>
                        <h2><?php echo e($ticket); ?></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div
                        class="box"
                        data-aos="fade-up"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/bonus.png')); ?>" alt="<?php echo app('translator')->get('Total Referral Bonus'); ?>"/>
                        </div>
                        <h4><?php echo app('translator')->get('Total Referral Bonus'); ?></h4>
                        <h2>
                            <small><sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup></small><?php echo e(getAmount($depositBonus + $investBonus)); ?>

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!----- refferal-information ----->
    <section class="refferal-link mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-<?php echo e(($latestRegisteredUser) ? '12':'6'); ?>">
                    <div class="box">
                        <h4 class="golden-text"><?php echo app('translator')->get('Referral Link'); ?></h4>
                        <div class="input-group">
                            <input
                                type="text"
                                value="<?php echo e(route('register.sponsor',[Auth::user()->username])); ?>"
                                class="form-control"
                                id="sponsorURL"
                                readonly
                            />
                            <button class="gold-btn copytext" id="copyBoard" onclick="copyFunction()"><i
                                    class="fa fa-copy mx-1"></i><?php echo app('translator')->get('copy link'); ?></button>
                        </div>
                    </div>
                </div>

                <?php if($latestRegisteredUser): ?>
                    <div class="col-md-6 mb-4 mb-md-0 refferal-information mt-5">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?php echo e(asset($themeTrue.'img/icon/handshake.png')); ?>" alt="<?php echo app('translator')->get('handshake img'); ?>"/>
                            </div>
                            <div>
                                <h4 class="golden-text"><?php echo app('translator')->get('Latest Registered Partner'); ?></h4>
                                <p><?php echo e($latestRegisteredUser->username); ?> <span class="pe-2"><?php echo app('translator')->get('Email'); ?>
                            : <?php echo e($latestRegisteredUser->email); ?></span></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-md-6 refferal-information <?php echo e(($latestRegisteredUser) ? 'mt-5':''); ?>">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo e(asset($themeTrue.'img/icon/deposit.png')); ?>" alt="<?php echo app('translator')->get('Referral Bonus img'); ?>"/>
                        </div>
                        <div>
                            <h4 class="golden-text"><?php echo app('translator')->get('The last Referral Bonus'); ?></h4>
                            <p><?php echo e(trans($basic->currency_symbol)); ?> <?php echo e($lastBonus); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

    <script src="<?php echo e(asset($themeTrue.'js/apexcharts.js')); ?>"></script>


    <script>
        "use strict";

        var options = {
            theme: {
                mode: 'dark',
            },

            series: [
                {
                    name: "<?php echo e(trans('Investment')); ?>",
                    color: 'rgba(247, 147, 26, 1)',
                    data: <?php echo $monthly['investment']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Payout')); ?>",
                    color: 'rgba(240, 16, 16, 1)',
                    data: <?php echo $monthly['payout']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Deposit')); ?>",
                    color: 'rgba(255, 72, 0, 1)',
                    data: <?php echo $monthly['funding']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Deposit Bonus')); ?>",
                    color: 'rgba(39, 144, 195, 1)',
                    data: <?php echo $monthly['referralFundBonus']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Investment Bonus')); ?>",
                    color: 'rgba(136, 203, 245, 1)',
                    data: <?php echo $monthly['referralInvestBonus']->flatten(); ?>

                }
            ],
            chart: {
                type: 'bar',
                // height: ini,
                background: '#000',
                toolbar: {
                    show: false
                }

            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: <?php echo $monthly['investment']->keys(); ?>,

            },
            yaxis: {
                title: {
                    text: ""
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                colors: ['#000'],
                y: {
                    formatter: function (val) {
                        return "<?php echo e(trans($basic->currency_symbol)); ?>" + val + ""
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#container"), options);
        chart.render();

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

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\laravel\Softtech\test_event\resources\views/themes/deepblack/user/dashboard.blade.php ENDPATH**/ ?>