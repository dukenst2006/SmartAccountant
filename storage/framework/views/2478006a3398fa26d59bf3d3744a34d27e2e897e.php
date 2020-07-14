<?php $__env->startSection('title', 'فاتوره جديده'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>فاتورة جديده</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="root">

        <div class="row justify-content-center animated bounceInUp">
            <div class="col-10">
                <div class="card" style="font-family: 'Cairo', sans-serif;font-weight: 900;">
                    <div class="card-header">
                        <h3 class="card-title">تفاصيل الفاتورة</h3>
                    </div>
                    <div class="card-body p-0 ">


                        <div class="form-group row col-sm-6 m-3">
                            <?php echo Form::label('Name', __('Models/Invoice.Name')); ?>

                            <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

                        </div>







                        <div class="form-group row col-sm-6 m-3">
                            <?php echo Form::label('Total', __('Models/Invoice.Total')); ?>

                            <?php echo Form::text('Total', null, ['class' => 'form-control']); ?>

                        </div>



                        <div class="form-group row col-sm-6 m-3">
                            <?php echo Form::label('Total', __('Models/Invoice.Paid')); ?>

                            <?php echo Form::text('Total', null, ['class' => 'form-control']); ?>

                        </div>


                        <div class="form-group row col-sm-6 m-3">
                            <?php echo Form::label('Total', __('Models/Invoice.Rest')); ?>

                            <?php echo Form::text('Total', null, ['class' => 'form-control']); ?>

                        </div>


                        <div class="form-group row col-sm-6 m-3">
                            <?php echo Form::label('InvoiceFile', __('Models/Invoice.File')); ?>

                            <?php echo Form::file('InvoiceFile', ['class' => 'form-control']); ?>

                        </div>



                    </div>


                    <div class="form-group col-sm-12">
                        <a href="#" class="btn btn-lg btn-success"><?php echo e(__('Buttons.Save')); ?></a>
                        <a href="#" class="btn btn-lg btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
                    </div>


                </div>
            </div>

        </div>



    </div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
        var _token = "<?php echo e(csrf_token()); ?>";
        var app = new Vue({
            el: '#root',
            data: {
                customrename: '',
                cutomer_paid: 0,
                cutomer_rest: 0,
                invoice_total: 0,
                invoice_paid: 0,
                invoice_rest: 0,
                deliverday: 1,
                deliverdate:'',
                invoice_products: [],
                products:[],
                
            },
            methods: {
                datacalc(){
                    var date = new Date();

                    date.setDate(date.getDate() + parseInt( this.deliverday));

                    this.deliverdate=date.toLocaleDateString();
                },
                completedinvoice(){


                    this.invoice_paid = this.invoice_total
                },
                resetdata() {
                    this.invoice_products = [];
                    this.invoice_paid = 0;
                    this.calculateTotal();
                    this.customrename = "";
                    this.deliverday = 1;
                },

                storebill() {
                    if (this.customrename == '' || this.invoice_products.length == null) {
                        swal.fire("خطأ!",
                            "<b>تأكد من ادخال</b>" +
                            "<ul style='direction: rtl; font-weight: 800; '>" +
                            "<li>اسم العميل</li>" +
                            "<li>اصناف الفاتورة</li>" +
                            "</ul>"
                            ,
                            "error");
                    } else {


                        let $this = $("#btnFetch");
                        $this.button('loading');
                        $this.prop("disabled", true);
                        $this.data('original-text', $this.html());
                        $this.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`);


                        $.ajax({
                            type: "post",
                            
                            url:"#",
                            dataType: 'json',
                            'contentType': 'application/json',

                            data:
                                JSON.stringify({
                                    'customername': this.customrename,
                                    'total': this.invoice_total,
                                    'paid': this.invoice_paid,
                                    'reset': this.invoice_rest,
                                    'deliverday':this.deliverday,
                                    'billitems': this.invoice_products,
                                    '_token': _token
                                }),

                        })
                            .done(data => {
                                swal.fire("Invoice", "Invoice successfully Created!", "success");
                                let $this = $("#btnFetch");
                                $this.prop("disabled", false);
                                $this.html($this.data('original-text'));
                                this.resetdata();
                                $("#printf").attr("src", "invoice/print/" + data.invoice_id);

                            })
                            .fail(function (data) {
                                swal.fire("Invoice !", "Make Sure From Your Data", "error");
                                let $this = $("#btnFetch");
                                $this.prop("disabled", false);
                                $this.html($this.data('original-text'));
                            });


                    }


                },
                calchelper() {


                    this.cutomer_rest = this.cutomer_paid - this.invoice_total
                },


                addNewRow(ele) {
                    var product = this.products.filter((item) => {
                        return item.id === parseInt(ele.currentTarget.getAttribute('id'))
                    });
                    if ((this.invoice_products.filter(d => d.product_no === product[0].id).length) != 0) {
                        var ar2 = this.invoice_products.filter(d => d.product_no === product[0].id).slice();
                        ar2[0].product_qty += 1;
                        ar2[0].line_total = (ar2[0].product_qty * ar2[0].product_price);
                    } else {

                        this.invoice_products.push({
                            product_no: product[0]['id'],
                            product_name: product[0]['Name'],
                            product_price: product[0]['price'],
                            product_qty: 1,
                            line_total: product[0]['price'],
                        });
                    }
                    this.calculateTotal();

                },
                deleteRow(index, invoice_product) {
                    var idx = this.invoice_products.indexOf(invoice_product);
                    console.log(idx, index);
                    if (idx > -1) {
                        this.invoice_products.splice(idx, 1);
                    }
                    this.calculateTotal();
                },
                calculateLineTotal(invoice_product) {
                    var total = parseFloat(invoice_product.product_price) * parseFloat(invoice_product.product_qty);
                    if (!isNaN(total)) {
                        invoice_product.line_total = total;
                    }
                    this.calculateTotal();

                },
                calculateTotal() {
                    var total;
                    total = this.invoice_products.reduce(function (sum, product) {
                        var lineTotal = parseFloat(product.line_total);
                        if (!isNaN(lineTotal)) {
                            return sum + lineTotal;
                        }
                    }, 0);

                    total = parseFloat(total);
                    if (!isNaN(total)) {


                        this.invoice_total = total;
                        this.invoice_rest = (this.invoice_total - this.invoice_paid);

                    } else {
                        this.invoice_total = '0.00'
                    }
                },


            }
        })
    </script>







<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/xselect2-bootstrap.min.css')); ?>">

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Invoices/createRaw.blade.php ENDPATH**/ ?>