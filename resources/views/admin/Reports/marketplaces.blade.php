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
                    <form method="get" action="{{route('admin.marketplacesreport')}}">
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="">{{__('money.from')}}</label>
                                <input class="form-control" type="date" name="from" id="">
                            </div>
                            <div class="col-6 form-group">
                                <label for="">{{__('money.to')}}</label>
                                <input class="form-control" type="date" name="to" id="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">{{__('money.search')}}</button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>{{__('Models/Marketplace.Name')}}</th>
                            <th>{{__('dashboard.bills')}}</th>
                            <th>{{__('Models/Invoice.Paid')}}</th>
                        </thead>
                        <tbody>
                            @foreach($marketplacesTable as $M)
                                <tr>
                                    <td>{{$M->id}}</td>
                                    <td>{{$M->Name}}</td>
                                    <td>{{$M->invoices->count()}}</td>
                                    <td>{{$M->invoices->sum('Paid')}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$marketplacesTable->links()}}
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

