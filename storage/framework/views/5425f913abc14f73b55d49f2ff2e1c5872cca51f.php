<?php $menuItemHelper = app('\JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper'); ?>

<?php if($menuItemHelper->isSearchBar($item)): ?>

    
    <?php echo $__env->make('vendor.adminlte.partials.navbar.menu-item-search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($menuItemHelper->isSubmenu($item)): ?>

    
    <?php echo $__env->make('vendor.adminlte.partials.navbar.menu-item-dropdown-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($menuItemHelper->isLink($item)): ?>

    
    <?php echo $__env->make('vendor.adminlte.partials.navbar.menu-item-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH /var/www/smart-acc.io/resources/views/vendor/adminlte/partials/navbar/menu-item.blade.php ENDPATH**/ ?>