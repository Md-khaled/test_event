<div id="sidebar">
    <a class="navbar-brand golden-text" href="<?php echo e(route('home')); ?>"><?php echo e(config('basic.site_title')); ?></a>
    <?php
        $user = \Illuminate\Support\Facades\Auth::user();
        $user_rankings = \App\Models\Ranking::where('rank_lavel', $user->last_lavel)->first();
    ?>

    <?php if($user->last_lavel != null && $user_rankings): ?>
        <div class="level-wrapper">
            <div class="level-box">
                <h4><?php echo app('translator')->get(@$user_rankings->rank_lavel); ?></h4>
                <p><?php echo app('translator')->get(@$user_rankings->rank_name); ?></p>
                <img src="<?php echo e(getFile(config('location.rank.path').@$user_rankings->rank_icon)); ?>" alt="<?php echo app('translator')->get('level image'); ?>" class="level-badge" />
            </div>
        </div>
    <?php endif; ?>

    <div class="wallet-wrapper">
        <div class="wallet-box d-none d-lg-block">
            <h4><?php echo app('translator')->get('Account Balance'); ?></h4>
            <h5> <?php echo app('translator')->get('Main Balance'); ?> <span><?php echo e($basic->currency_symbol); ?><?php echo e(@$user->balance); ?></span></h5>
            <h5 class="mb-0"> <?php echo app('translator')->get('Interest Balance'); ?> <span> <?php echo e($basic->currency_symbol); ?><?php echo e(@$user->interest_balance); ?></span></h5>
            <span class="tag"><?php echo e($basic->currency); ?></span>
        </div>
        <div class="d-flex justify-content-between mt-1">
            <a class="gold-btn btn"><i class="fa fa-wallet"></i> <?php echo app('translator')->get('Deposit'); ?></a>
            <a class="gold-btn btn"><i class="fa fa-usd"></i> <?php echo app('translator')->get('Package'); ?></a>
        </div>
    </div>
    <ul class="pb-4">
       <!-- list item -->
       <li class="<?php echo e(menuActive('user.home')); ?>">
          <a href="<?php echo e(route('user.home')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/layout.png')); ?>" alt="<?php echo app('translator')->get('Dashboard'); ?>"/><?php echo app('translator')->get('Dashboard'); ?>
          </a>
       </li>
	   <li class="<?php echo e(menuActive(['plan'])); ?>">
          <a href="<?php echo e(route('plan')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/growth-graph.png')); ?>" alt="<?php echo app('translator')->get('invest history'); ?>"/><?php echo app('translator')->get('Package'); ?>
          </a>
        </li>


        <li class="<?php echo e(menuActive(['user.invest-history'])); ?>">
          <a href="<?php echo e(route('user.invest-history')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/growth-graph.png')); ?>" alt="<?php echo app('translator')->get('invest history'); ?>"/><?php echo app('translator')->get('Purchase History'); ?>
          </a>
        </li>

       <li class="<?php echo e(menuActive(['user.addFund', 'user.addFund.confirm'])); ?>">
          <a href="<?php echo e(route('user.addFund')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/money-bag.png')); ?>" alt="<?php echo app('translator')->get('Add Fund'); ?>"/><?php echo app('translator')->get('Add Fund'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.fund-history', 'user.fund-history.search'])); ?>">
          <a href="<?php echo e(route('user.fund-history')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/fund.png')); ?>" alt="<?php echo app('translator')->get('Fund History'); ?>"/><?php echo app('translator')->get('Fund History'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.money-transfer'])); ?>">
          <a href="<?php echo e(route('user.money-transfer')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/money-transfer.png')); ?>" alt="<?php echo app('translator')->get('transfer'); ?>"/><?php echo app('translator')->get('transfer'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.transaction', 'user.transaction.search'])); ?>">
          <a href="<?php echo e(route('user.transaction')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/transaction.png')); ?>" alt="<?php echo app('translator')->get('transaction'); ?>"/><?php echo app('translator')->get('transaction'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>">
          <a href="<?php echo e(route('user.payout.money')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/payout.png')); ?>" alt="<?php echo app('translator')->get('payout'); ?>"/><?php echo app('translator')->get('payout'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.payout.history','user.payout.history.search'])); ?>">
          <a href="<?php echo e(route('user.payout.history')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/pay-history.png')); ?>" alt="<?php echo app('translator')->get('payout history'); ?>"/><?php echo app('translator')->get('payout history'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.referral'])); ?>">
          <a href="<?php echo e(route('user.referral')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/refferal.png')); ?>" alt="<?php echo app('translator')->get('my referral'); ?>"/><?php echo app('translator')->get('my referral'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.referral.bonus', 'user.referral.bonus.search'])); ?>">
          <a href="<?php echo e(route('user.referral.bonus')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/bonus.png')); ?>" alt="<?php echo app('translator')->get('referral bonus'); ?>"/><?php echo app('translator')->get('referral bonus'); ?>
          </a>
       </li>

        <li class="<?php echo e(menuActive(['user.badges'])); ?>">
            <a href="<?php echo e(route('user.badges')); ?>" class="sidebar-link">
                <img src="<?php echo e(asset($themeTrue.'img/icon/refferal.png')); ?>" alt="<?php echo app('translator')->get('badge icon'); ?>"/><?php echo app('translator')->get('RANK'); ?>
            </a>
        </li>

       <li class="<?php echo e(menuActive(['user.profile'])); ?>">
          <a href="<?php echo e(route('user.profile')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/setting.png')); ?>" alt="<?php echo app('translator')->get('profile settings'); ?>"/><?php echo app('translator')->get('profile settings'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])); ?>">
          <a href="<?php echo e(route('user.ticket.list')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/support.png')); ?>" alt="<?php echo app('translator')->get('support ticket'); ?>"/><?php echo app('translator')->get('support ticket'); ?>
          </a>
       </li>
    </ul>
 </div>
<?php /**PATH /home/theenproduct24/my.theenproduct.com/resources/views/themes/deepblack/partials/sidebar.blade.php ENDPATH**/ ?>