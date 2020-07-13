<?php $__env->startSection('title', 'AdminLTE'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customecss'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('counter')->dom;
} elseif ($_instance->childHasBeenRendered('VXJKjoP')) {
    $componentId = $_instance->getRenderedChildComponentId('VXJKjoP');
    $componentTag = $_instance->getRenderedChildComponentTagName('VXJKjoP');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VXJKjoP');
} else {
    $response = \Livewire\Livewire::mount('counter');
    $dom = $response->dom;
    $_instance->logRenderedChild('VXJKjoP', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>
 <?php echo \Livewire\Livewire::scripts(); ?>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/home.blade.php ENDPATH**/ ?>