@extends('adminlte::page')
@section('title', 'Safe')

@section('content_header')
    <h1>الخزنة</h1>
@stop

@section('content')
    <div id="root">
            <div class="row justify-content-center animated slideInDown ">
            <div class="card card-primary col-8">
                <div class="card-body">
                    <div class="row">
                        <h4 class="col-12 text-right">حدد الفتره</h4>

                        <div class="form-group col-4">
                            {!! Form::label('DateFrom', __('Safe.From')) !!}
                            <input @change="GetInvoices()" type="date" v-model="start_date" class="form-control">
                        </div>

                        <div class="form-group col-4">
                            {!! Form::label('DateTo', __('Safe.To')) !!}
                            <input @change="GetInvoices()" type="date" v-model="end_date" class="form-control">
                        </div>

                        <div class="form-group col-4">
                            {!! Form::label('MarketplaceID', __('Models/Marketplace.Name')) !!}
                            <select class="form-control" @change="GetInvoices()" name="" v-model="selected" id="">
                                <option value="">اختر</option>
                                <option v-for="(market,k) in markets" :value="k">@{{ market }}</option>
                            </select>
                        </div>


                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>







        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row animated bounceInUp">


                    <div class="table-responsive">

                        <table style="direction: rtl;" id="product_table"
                               class="table table-bordered table-hover dataTable dtr-inline calculateclass"
                               role="grid">
                            <thead>
                            <tr class="text-center" role="row">
                                <th class="text-center" tabindex="0">
                                    الصندوق
                                </th>
                                <th class="text-center" tabindex="0">
                                    رقم الحساب
                                </th>
                                <th class="text-center" tabindex="0" rowspan="1">
                                    اجمالي الفاتورة
                                </th>
                                <th class="text-center" tabindex="0" rowspan="1">
                                    المدفوع
                                </th>
                                <th class="text-center" tabindex="0" rowspan="1">
                                    الباقي
                                </th>

                            </tr>
                            </thead>
                            <tbody id="product_Body">

                            <tr v-if="invoices != null" class='text-center' role='row'
                                v-for="(invoice, k) in invoices" :key="k">
                                <td v-if="invoice.PaymentType != null">@{{ invoice.PaymentType.Name }}</td>
                                <td>@{{ invoice.AccountNumber }}</td>
                                <td>@{{ invoice.Total }}</td>
                                <td>@{{ invoice.Paid }}</td>
                                <td>@{{ invoice.Rest }}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 p-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>اخر الحركات المالية (مباشر)</h4>
                            </div>
                            <div class="card-body">
                                <table style="direction: rtl;" id="product_table"
                                       class="table table-bordered table-hover dataTable dtr-inline calculateclass"
                                       role="grid">
                                    <thead>
                                    <tr class="text-center" role="row">
                                        <th class="text-center" tabindex="0">
                                            الصندوق
                                        </th>
                                        <th class="text-center" tabindex="0">
                                            رقم الحساب
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            اجمالي الفاتورة
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            المدفوع
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            الباقي
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody v-if="last_invoice != null" id="product_Body">

                                    <tr v-for="i in last_invoice" class='text-center' role='row'>
                                        <td>@{{ i.PaymentType.Name }}</td>
                                        <td>@{{ i.AccountNumber }}</td>
                                        <td>@{{ i.Total }}</td>
                                        <td>@{{ i.Paid }}</td>
                                        <td>@{{ i.Rest }}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>اخر الحركات المالية</h4>
                            </div>
                            <div class="card-body">
                                <table style="direction: rtl;" id="product_table"
                                       class="table table-bordered table-hover dataTable dtr-inline calculateclass"
                                       role="grid">
                                    <thead>
                                    <tr class="text-center" role="row">
                                        <th class="text-center" tabindex="0">
                                            الصندوق
                                        </th>
                                        <th class="text-center" tabindex="0">
                                            رقم الحساب
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            اجمالي الفاتورة
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            المدفوع
                                        </th>
                                        <th class="text-center" tabindex="0" rowspan="1">
                                            الباقي
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody v-if="last_invoice_day != null" id="product_Body">

                                        <tr   v-for="i in last_invoice_day" class='text-center' role='row'>
                                            <td>@{{ i.PaymentType.Name }}</td>
                                            <td>@{{ i.AccountNumber }}</td>
                                            <td>@{{ i.Total }}</td>
                                            <td>@{{ i.Paid }}</td>
                                            <td>@{{ i.Rest }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




@section('customejs')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        var _token = "{{ csrf_token() }}";

        var app = new Vue({
            el: '#root',
            data: {
                {{--searchresult: @json($products),--}}
                keyword: '',
                start_date:'2000-10-20',
                end_date:'2100-10-31',
                selected:'',
                markets:[],
                invoices:[],
                int:null,
                last_invoice:null,
                last_invoice_day:null,
            },
            methods: {
                GetAllMarketPlaces(){
                    axios.get("{{route('getAllMarkets')}}").then((data)=>{
                        this.markets = data.data;


                    });
                },
                GetInvoices(){
                    data ={
                        'from'  :   this.start_date,
                        'to'    :   this.end_date,
                        'ID'    :   this.selected,
                    };
                    axios.post('{{route('getInvoices')}}',data).then((data)=>{
                        this.invoices = data.data.data;
                        this.GetLastInvoice();
                        this.GetLastInvoiceNow();
                    })
                },
                GetLastInvoiceNow(){
                    this.int = setInterval(()=>{
                        axios.post('{{route('LastInvoiceNow')}}',{'ID':this.selected}).then((data)=>{
                            this.last_invoice = data.data.data;
                        });
                    },60000);
                },
                GetLastInvoice(){
                    data ={
                        'from'  :   this.start_date,
                        'to'    :   this.end_date,
                        'ID'    :   this.selected,
                    };
                    axios.post('{{route('LastInvoice')}}',data).then((data)=>{
                        this.last_invoice_day = data.data.data;
                    });
                }

                {{--deletep(ele)--}}
                {{--{--}}
                {{--    let  proid = ele.currentTarget.getAttribute('id');--}}
                {{--    Swal.fire({--}}
                {{--        title: 'تأكيد',--}}
                {{--        text: "هل انت متأكد من حذف هذا الصنف",--}}
                {{--        icon: 'warning',--}}
                {{--        showCancelButton: true,--}}
                {{--        confirmButtonColor: '#3085d6',--}}
                {{--        cancelButtonColor: '#d33',--}}
                {{--        cancelButtonText: 'لا',--}}
                {{--        confirmButtonText: 'نعم'--}}
                {{--    }).then((result) => {--}}
                {{--        if (result.value) {--}}



                {{--            $.ajax({--}}
                {{--                type: "post",--}}
                {{--                url: "{{route('api.product.delete')}}",--}}
                {{--                dataType: 'json',--}}
                {{--                'contentType': 'application/json',--}}

                {{--                data:--}}
                {{--                    JSON.stringify({--}}
                {{--                        '_token':_token,--}}
                {{--                        'productid': parseInt(proid)--}}
                {{--                    }),--}}

                {{--            })--}}
                {{--                .done(data => {--}}
                {{--                    Swal.fire(--}}
                {{--                        'اشعار!',--}}
                {{--                        'تم الحذف بنحاح',--}}
                {{--                        'success'--}}
                {{--                    );--}}
                {{--                    location.reload();--}}

                {{--                })--}}
                {{--                .fail(function (data) {--}}
                {{--                    swal.fire("خطأ !", "مشكله في الحذف", "error");--}}

                {{--                });--}}









                {{--        }--}}
                {{--    })--}}

                {{--},--}}
                {{--livesearch() {--}}
                {{--    $.ajax({--}}
                {{--        type: "get",--}}
                {{--        url: "{{route('api.product.search')}}",--}}
                {{--        dataType: 'json',--}}
                {{--        'contentType': 'application/json',--}}

                {{--        data: {--}}
                {{--            'q': this.keyword,--}}
                {{--        }--}}

                {{--    })--}}
                {{--        .done(data => {--}}


                {{--            this.searchresult = data.results;--}}


                {{--        })--}}
                {{--        .fail(function (data) {--}}
                {{--            swal.fire("Invoice !", "Make Sure From Your Data", "error");--}}


                {{--        });--}}


                {{--}--}}

            },
            created(){
                this.GetAllMarketPlaces();
            }


        });

    </script>

@endsection
