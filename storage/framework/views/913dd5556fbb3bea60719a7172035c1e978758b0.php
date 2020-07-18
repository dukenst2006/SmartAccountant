<?php echo Form::open(['route' => ['admin.marketplaces.destroy', $id ], 'method' => 'delete']); ?>

<div class='btn-group'>
    <a href="<?php echo e(route('admin.marketplaces.show', $id )); ?>" class='btn btn-warning btn-sm p-1'>
        <i class="fas fa-2x fa-eye"></i>
    </a>
    <a href="<?php echo e(route('admin.marketplaces.edit', $id )); ?>" class='btn btn-primary btn-sm p-1'>
        <i class="fas fa-2x fa-edit"></i>
    </a>
    <?php echo Form::button('<i class="fas fa-2x fa-trash text-white"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm',
        'onclick' => "return confirm('Are you sure?')"
    ]); ?>

</div>
<?php echo Form::close(); ?>

<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/marketplaces/datatables_actions.blade.php ENDPATH**/ ?>