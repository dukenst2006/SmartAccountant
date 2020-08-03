@extends('adminlte::page')
@section('title', 'الخزينة')

@section('content_header')
        <h1><i class="fas fa-dollar-sign"></i> الخزينة </h1>
@stop

@section('content')
    <div>
        <div class="container  justify-content-center">
            <div class="row  ">
                <div class=" col-md-6 col-lg-4 animated flipInX">
                    <div class="info-box bg-danger  ">
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-sort-amount-down-alt index-val" style="font-size: 47px;"></i>
                    </span>
                        <div class="info-box-content">
                            <h2 class="info-box-text">الخسائر</h2>
                            <h2 class="info-box-number">
                                {{$expenses->sum('Price') - $invoices->sum('paid') > 0? $expenses->sum('Price') - $invoices->sum('paid'):0}}
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4 animated flipInX">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fas fa-sort-amount-up index-val" style="font-size: 47px;"></i></span>

                        <div class="info-box-content">
                            <h2 class="info-box-text">الأرباح</h2>
                            <h2 class="info-box-number">
                                {{$invoices->sum('Paid')  > 0? $invoices->sum('Paid') :0}}
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-lg-4 animated flipInX">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon"><i class="fas  fa-money-check-alt index-val" style="font-size: 47px;"></i></span>

                        <div class="info-box-content">
                            <h2 class="info-box-text">الضريبة</h2>
                            <h2 class="info-box-number">
                                {{(($invoices->sum('Paid')  > 0 ? $invoices->sum('Paid') :0)/100) * auth()->user()->settings->VAT}}
                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="main-tbl" style="overflow:auto;">
        <table class="table table-bordered  table-striped" style="min-width: 700px">
            <tr  class=" text-white main-bg-blu-color">
                <th>المتجر</th>
                <th>عدد الفواتير</th>
                <th>اجمالي قيمة الفواتير</th>
                <th>اجمالي قيمة المدفوع</th>
                <th>اجمالي قيمة الضريبة</th>
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
                    <td>{{$market->invoices->sum('Paid') / 100 * auth()->user()->settings->VAT}}</td>
                    <td>{{$market->invoices->sum('Rest')}}</td>
                    <td>{{$market->expenses->sum('Price')}}</td>
                    <td>{{$market->invoices->sum('Paid') - $market->expenses->sum('Price')}}</td>
                </tr>
            @endforeach

            <tr>
                <td colspan="8" class="text-center">
                    {{$markets}}
                </td>
            </tr>
        </table>
        </div>
    </div>
@endsection
