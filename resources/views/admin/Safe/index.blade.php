@extends('adminlte::page')
@section('title', 'Safe')

@section('content_header')
    <h1>الخزنة</h1>
@stop

@section('content')
    <div id="root">
    <div class="row col-12  justify-content-center">
        <div class="row col-md-6 col-sm-6 col-6">


            <div class="col-md-6 col-sm-6 col-12 animated flipInX">
                <div class="info-box bg-danger  ">
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-sort-amount-down-alt index-val"></i>
                    </span>

                    <div class="info-box-content">
                        <h1 class="info-box-text">الخسائر</h1>
                        <h2 class="info-box-number">41,410</h2>

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
                        <h2 class="info-box-number">41,410</h2>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        </div>
            <div class="row justify-content-center animated slideInDown ">
            <div class="card card-primary col-8">
                <div class="card-body">
                    <div class="row">
                        <h4 class="col-12 text-right">حدد الفتره</h4>

                        <div class="form-group col-4">
                            {!! Form::label('DateFrom', __('Safe.From')) !!}
                            {!! Form::date('name', \Carbon\Carbon::now() ,['class' => 'form-control' , 'id'=>'DateFrom'])!!}
                        </div>

                        <div class="form-group col-4">
                            {!! Form::label('DateTo', __('Safe.To')) !!}
                            {!! Form::date('name', \Carbon\Carbon::now() ,['class' => 'form-control' , 'id'=>'DateTo'])!!}
                        </div>

                        <div class="form-group col-4">
                            {!! Form::label('MarketplaceID', __('Models/Marketplace.Name')) !!}
                            {!! Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']) !!}
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
                                    #
                                </th>
                                <th class="text-center" tabindex="0" rowspan="1">
                                    اسم الصنف
                                </th>
                                <th class="text-center" tabindex="0" rowspan="1">
                                    السعر
                                </th>
                                <th class="text-center" tabindex="0" rowspan="1">
                                    التاريخ
                                </th>

                            </tr>
                            </thead>
                            <tbody id="product_Body">

                            <tr class='text-center' role='row'
                                v-for="(searchresult, k) in searchresult" :key="k">
                                <td v-text="searchresult.id" id='td_barcode'></td>
                                <td v-text="searchresult.name" id='td_name'></td>
                                <td v-text="searchresult.price" id='td_price'></td>
                                <td v-text="searchresult.created_at" id='td_total'></td>
                                <td>
                                    <a  v-bind:href="'/product/' + searchresult.id" target="_blank">
                                                <span class='text-center text-red'>
                                                <i style="cursor: pointer;" class="fas fa-edit text-red">
                                                    </i>
                                                </span>
                                    </a>

                                    <button  @click="deletep" class="btn"  v-bind:id="searchresult.id">
                                        <i style="cursor: pointer;" class="fas fa-trash text-red">
                                        </i>

                                    </button>
                                </td>
                            </tr>

                            </tbody>
                        </table>


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

            },
            methods: {

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

            }


        });

    </script>

@endsection
