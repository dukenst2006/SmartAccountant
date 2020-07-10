<form action="<?php echo e($item['href']); ?>" method="<?php echo e($item['method']); ?>" class="form-inline mx-2">
    <div class="input-group">
        <input class="form-control form-control-navbar" type="search" name="<?php echo e($item['input_name']); ?>"
               placeholder="<?php echo e($item['text']); ?>" aria-label="<?php echo e($item['aria-label'] ?? $item['text']); ?>">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
<?php /**PATH /home/abcconsttech/public_html/SmartAccountant/resources/views/vendor/adminlte/partials/navbar/menu-item-search-form.blade.php ENDPATH**/ ?>