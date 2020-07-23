@extends('adminlte::page')
@section('title', 'Stocks')

@section('content_header')
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    فلتر
                </div>
                <div class="card-body p-2">
                    <form class="p-3" action="{{route('admin.expensesreport')}}" method="get">
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
                        </div>
                        <button type="submit" class="btn btn-success">{{__('بحث')}}</button>
                    </form>
                </div>
            </div>


            <div id="chart">

                {!! $expensechart->container() !!}

            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('Models/Expenses.Price')}}</th>
                        <th>{{__('Models/Expenses.Date')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expensesTable as $E)
                        <tr>
                            <td>{{$E->ID}}</td>
                            <td>{{$E->Price}}</td>
                            <td>{{$E->Date}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$expensesTable->links()}}
        </div>

    </div>
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">

    </div>
    <div class="text-center">
{{--                @include('adminlte-templates::common.paginate', ['records' => $expenses])--}}

    </div>

@endsection

@section('customejs')
    {!! $expensechart->script() !!}
@endsection

