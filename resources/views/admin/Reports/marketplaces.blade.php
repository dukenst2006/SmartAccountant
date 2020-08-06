@extends('adminlte::page')
@section('title', 'تقارير مبيعات الفروع')

@section('content_header')
    <h1>تقارير مبيعات الفروع</h1>
@stop

@section('content')

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> مبيعات الفروع لاخر شهر</strong>
            </p>
            <div id="chart">

                {!! $chart->container() !!}

            </div>
            <div class="card">
                <div class="card-header">
                    <form class="p-3" action="{{route('admin.marketplacesreport')}}" method="get">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">{{__('Safe.From')}}</label>
                                    <input type="date" class="form-control" name="from">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">{{__('Safe.To')}}</label>
                                    <input type="date" class="form-control" name="to">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">{{__('Models/Marketplace.Name')}}</label>
                                    <select name="MarketPlaceID" class="form-control" id="">
                                        <option value="">كل الفروع</option>
                                        @foreach(@App\Models\Marketplace::all() as $M)
                                            <option value="{{$M->id}}">{{$M->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">{{__('نوع الفواتير')}}</label>
                                    <select name="type" class="form-control" id="">
                                        <option value="">
                                            كل الانواع
                                            <span>{{@App\Models\Invoice::all()->count()}}</span>
                                        </option>
                                        <option value="raw">
                                            كتابية
                                            <span>{{@App\Models\Invoice::all()->where('IsRaw',1)->count()}}</span>
                                        </option>
                                        <option value="sale">
                                            الكترونية
                                            <span>{{@App\Models\Invoice::all()->where('IsRaw',0)->count()}}</span>
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">{{__('money.search')}}</button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>{{__('Models/Marketplace.Name')}}</th>
                            <th>{{__('Models/Inventory.ProductCount')}}</th>
                            <th>{{__('Models/Invoice.Total')}}</th>
                            <th>{{__('Models/Invoice.Paid')}}</th>
                            <th>{{__('Models/Invoice.Rest')}}</th>
                            <th>{{__('Models/Bonds.Columns.ClientName')}}</th>
                            <th>{{__('Models/Invoice.PaymentTypeID')}}</th>
                            <th>{{__('Models/Expenses.Date')}}</th>
                            <th>{{__('الوقت')}}</th>
                        </thead>
                        <tbody>
                            @foreach($invoices as $M)
                                <tr>
                                    <td>{{$M->id}}</td>
                                    <td>{{$M->MarketPlace->Name}}</td>
                                    <td>{{$M->invoiceItems->count()}}</td>
                                    <td>{{$M->sum('Total')}}</td>
                                    <td>{{$M->sum('Paid')}}</td>
                                    <td>{{$M->sum('Rest')}}</td>
                                    <td>{{$M->ClientName ?? __("لم يدون")}}</td>
                                    <td>{{$M->paymenttype->Name}}</td>
                                    <td>{{$M->created_at->format('Y/m/d')}}</td>
                                    <td>{{$M->created_at->format('h:i')}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$invoices->links()}}
                </div>
            </div>

        </div>

    </div>

    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">

    </div>
    <div class="text-center">
        {{--       @include('adminlte-templates::common.paginate', ['records' => $inventories])--}}

    </div>

@endsection

@section('customejs')
{{--    {!! $chart->script() !!}--}}
@endsection

