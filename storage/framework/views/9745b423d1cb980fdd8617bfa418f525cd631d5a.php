<?php $__env->startSection('title', 'FinicalReports'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>التقارير المالية</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <div class="row col-12  justify-content-center">
            <div class="row col-md-6 col-sm-6 col-6">
                <div class="col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="info-box bg-danger  ">
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-sort-amount-down-alt index-val"></i>
                    </span>
                        <div class="info-box-content">
                            <h1 class="info-box-text">الخسائر</h1>
                            <h2 class="info-box-number">
                            99999
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fas fa-2x fa-sort-amount-up index-val"></i></span>

                        <div class="info-box-content">
                            <h1 class="info-box-text">الأرباح</h1>
                            <h2 class="info-box-number">
                            99999
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>


                <div id="chart" style="height: 300px;">


                </div>



            </div>
        </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>
    <script>
        const chart = new Chartisan({
            el: '#chart',
            url: "<?php echo route('charts.'.'sample_chart'); ?>",
            hooks: new ChartisanHooks()
                .colors(['#ECC94B', '#4299E1'])
                .responsive()
                .beginAtZero()
                .legend({ position: 'bottom' })
            //    .title('This is a sample chart using chartisan!')
               // .datasets([{ type: 'line', fill: false }, 'bar']),
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/FinicalReports/index.blade.php ENDPATH**/ ?>