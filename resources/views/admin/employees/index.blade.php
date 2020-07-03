@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        @if(@Route::current()->getName() == "admin.employees.index")
            <h3 class="col-12 text-center">{{__('human_r.all_employees')}}</h3>
        @elseif(@Route::current()->getName() == "admin.stoned_emps")
            <h3 class="col-12 text-center">{{__('human_r.stoned_employees')}}</h3>
        @elseif(@Route::current()->getName() == "admin.active_emps")
            <h3 class="col-12 text-center">{{__('human_r.active_employees')}}</h3>
        @elseif(@Route::current()->getName() == "admin.brench_emps")
            <h3 class="col-12 text-center">
                {{__('human_r.search in brench')}}
                {{$brench->name}}
            </h3>
        @endif
        <table id="employee" class="table-bordered table">
            <thead>
                <th>{{__('employee.name')}}</th>
                <th>{{__('employee.nation')}}</th>
                <th>{{__('employee.job')}}</th>
                <th>{{__('employee.identity_number')}}</th>
                <th>{{__('employee.phone')}}</th>
                <th>{{__('employee.bank_account')}}</th>
                <th>{{__('employee.sex')}}</th>
                <th>{{__('employee.salary')}}</th>
{{--                <th>{{__('employee.status')}}</th>--}}
                <th>{{__('employee.brench')}}</th>
                <th>{{__('branch.controller')}}</th>
            </thead>
            @foreach($emps as $emp)
                <tr>
                    <th>{{$emp->User->Name}}</th>
                    <th>{{$emp->Nationality}}</th>
                    <th>{{$emp->JobTitle}}</th>
                    <th>{{$emp->NationalID}}</th>
                    <th>{{$emp->PhoneNumber}}</th>
                    <th>{{$emp->IBAN}}</th>
                    <th>{{$emp->Sex}}</th>
                    <th>{{$emp->Salary}}</th>
{{--                    <th>{{__('employee.'.$emp->status)}}</th>--}}
                    <th>{{$emp->MarketPlace->Name}}</th>
                    <th>
                        <a class="btn btn-info" href="{{route('admin.employees.edit',$emp->ID)}}">
                            {{__('employee.edit')}}
                        </a>
{{--                        <a class="btn mt-2 btn-warning" href="{{route($emp->status == "stoned"?'admin.activating':'admin.stoning',$emp)}}">--}}
{{--                            {{__('employee.change status')}}--}}
{{--                        </a>--}}
                    </th>
                </tr>
{{--                <tr>--}}
{{--                    <td colspan="3">--}}
{{--                        {{__('employee.image')}}--}}
{{--                        <hr>--}}
{{--                        <img height="80px"  width="200px" class="img-thumbnail" src="{{asset($emp->image)}}">--}}
{{--                    </td>--}}
{{--                    <td colspan="3">--}}
{{--                        {{__('employee.identity_img')}}--}}
{{--                        <hr>--}}
{{--                        <img height="80px" width="200px" class="img-thumbnail" src="{{asset($emp->identity_img)}}">--}}
{{--                    </td>--}}
{{--                    <td colspan="3">--}}
{{--                        {{__('employee.contract_img')}}--}}
{{--                        <hr>--}}
{{--                        <img height="80px" width="200px" class="img-thumbnail" src="{{asset($emp->contract_img)}}">--}}
{{--                    </td>--}}
{{--                </tr>--}}
            @endforeach
            @if($emps->count() == 0)
                <tr>
                    <td colspan="11">
                        <h4 class="col-12 text-center">{{__('employee.empty')}}</h4>
                    </td>
                </tr>
            @endif
        </table>
    </div>
@endsection
@section('javascript')
    <x-datatable id="employee"></x-datatable>
@endsection
