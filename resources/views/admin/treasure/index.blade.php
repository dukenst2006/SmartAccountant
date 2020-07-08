@extends('adminlte::page')
@section('title', 'Safe')

@section('content_header')
    <h1>الخزينة</h1>
@stop

@section('content')
    <div>
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
                                {{$expenses->sum('Price') - $invoices->sum('paid') > 0? $expenses->sum('Price') - $invoices->sum('paid'):0}}
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
                                {{$invoices->sum('paid') - $expenses->sum('Price') > 0? $invoices->sum('paid') - $expenses->sum('Price'):0}}
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>المتجر</th>
                <th>عدد الفواتير</th>
                <th>اجمالي قيمة الفواتير</th>
                <th>اجمالي قيمة المدفوع</th>
                <th>اجمالي قيمة المتبقي</th>
                <th>اجمالي المصاريف</th>
                <th>صافي</th>
            </tr>
            @foreach($markets as $market)
                <tr>
                    <td>{{$market->Name}}</td>
                    <td>{{$market->invoices->count()}}</td>
                    <td>{{$market->invoices->sum('Total')}}</td>
                    <td>{{$market->invoices->sum('Paid')}}</td>
                    <td>{{$market->invoices->sum('Rest')}}</td>
                    <td>{{$market->expenses->sum('Price')}}</td>
                    <td>{{$market->invoices->sum('Paid') - $market->expenses->sum('Price')}}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="5" class="text-center">
                    {{$markets}}
                </td>
            </tr>
        </table>
    </div>
@endsection
