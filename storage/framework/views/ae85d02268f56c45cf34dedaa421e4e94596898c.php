<nav class="main-header navbar
    <?php echo e(config('adminlte.classes_topnav_nav', 'navbar-expand')); ?>

<?php echo e(config('adminlte.classes_topnav', 'navbar-white navbar-light')); ?>">

    
    <ul class="navbar-nav">
        
        <?php echo $__env->make('vendor.adminlte.partials.navbar.menu-item-left-sidebar-toggler', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->renderEach('vendor.adminlte.partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item'); ?>

        
        <?php echo $__env->yieldContent('content_top_nav_left'); ?>
    </ul>

    
        <ul class="navbar-nav case-info <?php echo e((app()->getLocale() == "ar") ? 'mr-auto' :"ml-auto"); ?>">

         <?php if(auth()->check() && auth()->user()->hasRole('MarketplaceOwner')): ?>
        <div>
            <span class="ml-2">
            <a href="<?php echo e(route('admin.settings.index')); ?>" class="d-inline-block text-danger py-2"><i class="fas fa-cogs"></i> <small>إعدادت البرنامج</small> </a>
        </span>
            <span class="ml-2">
           <a href="" class="d-inline-block text-info py-2"> <i class="fas fa-store"></i>  <small><?php echo e(auth()->user()->settings->AppName ?? 'متجر'); ?></small> </a>
        </span>
            <span class="ml-2">
           <span href="" class="d-inline-block text-success py-2">   <small><i class="fas fa-circle"></i>    حالة الإشتراك </small> </span>
        </span>
        </div>
        <?php endif; ?>
        
        <?php echo $__env->yieldContent('content_top_nav_right'); ?>

        
        <?php echo $__env->renderEach('vendor.adminlte.partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item'); ?>


        
        <?php if(config('adminlte.language_switch_button')): ?>
            <ul class="navbar-nav">
                <a class="nav-link"
                   href="<?php echo e(config('adminlte.language_switch_href') .'/'. (app()->getLocale()== 'ar' ? 'en'  : 'ar'  )); ?>">
                    <i class="fa fa-2x fa-language"></i>
                    <span class="badge  badge-info navbar-badge"><?php echo e(app()->getLocale()); ?></span>
                </a>

            </ul>
        <?php endif; ?>

        
        <?php if(Auth::user()): ?>
            <?php if(config('adminlte.usermenu_enabled')): ?>
                <?php echo $__env->make('vendor.adminlte.partials.navbar.menu-item-dropdown-user-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <?php echo $__env->make('vendor.adminlte.partials.navbar.menu-item-logout-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        <?php endif; ?>




        
        <?php if(config('adminlte.right_sidebar')): ?>
            <?php echo $__env->make('vendor.adminlte.partials.navbar.menu-item-right-sidebar-toggler', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </ul>

</nav>
<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/vendor/adminlte/partials/navbar/navbar.blade.php ENDPATH**/ ?>