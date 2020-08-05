@extends('adminlte::page')
@section('title', 'الموظفين')

@section('content_header')
@stop

@section('content')
    <div class="row justify-content-center">
    <div class="col-md-8 chart-modifications">




            <div id="chart">

                {!! $employeechart->container() !!}

            </div>
        <div class="card p-3">
            <form action="{{route('admin.employeesreport')}}" method="get">
                <div class="row">
                    <div class="form-group col-4">
                        <label for="">{{__('money.from')}}</label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label for="">{{__('Models/Marketplace.Name')}}</label>
                        <select name="marketID" class="form-control">
                            <option value="">{{__('General.All')}}</option>
                            @foreach(@App\Models\Marketplace::all() as $M)
                                <option value="{{$M->id}}">{{$M->Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label for="">{{__('money.to')}}</label>
                        <input type="date" name="to" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">{{__('money.search')}}</button>
            </form>
        </div>
        <table class="table table-bordered m-3">
            <thead class="thead-light">
                <tr style="background-color: #053395b5 !important;color: #FFF">
                    <td>#</td>
                    <td>{{__('employee.name')}}</td>
                    <td>{{__('Models/Employee.JobTitle')}}</td>
                    <td>{{__('Models/Marketplace.Name')}}</td>
                </tr>
            </thead>
            <tbody>
                @foreach($employeesTable as $E)
                    <tr>
                        <td>{{$E->ID}}</td>
                        <td>{{$E->User->Name}}</td>
                        <td>{{$E->JobTitle}}</td>
                        <td>{{$E->MarketPlace->Name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    </div>
    <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">

        </div>
        <div class="text-center">
{{--        @include('adminlte-templates::common.paginate', ['records' => $inventories])--}}

        </div>

@endsection

@section('customejs')
    {!! $employeechart->script() !!}
@endsection

