<?php $menuItemHelper = app('\JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper'); ?>

<?php if($menuItemHelper->isHeader($item)): ?>

    
    <li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header">
        <?php echo e(is_string($item) ? $item : $item['header']); ?>

    </li>

<?php elseif($menuItemHelper->isSearchBar($item)): ?>

    
    <?php echo $__env->make('vendor.adminlte.partials.sidebar.menu-item-search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($menuItemHelper->isSubmenu($item)): ?>

    
    <?php echo $__env->make('vendor.adminlte.partials.sidebar.menu-item-treeview-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($menuItemHelper->isLink($item)): ?>

    

    <?php echo $__env->make('vendor.adminlte.partials.sidebar.menu-item-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH /var/www/smart-acc.io/resources/views/vendor/adminlte/partials/sidebar/menu-item.blade.php ENDPATH**/ ?>