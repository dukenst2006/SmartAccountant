@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <div class="row justify-content-center">
             <div class="col-3 m-1  text-center p-1 card bg-light">
                 <h4>{{__('dashboard.admins')}}</h4>
                 <h5>{{@App\Admin::all()->count()}}</h5>
             </div>
             <div class="col-3 m-1  text-center p-1 card bg-dark">
                 <h4>{{__('dashboard.employees')}}</h4>
                 <h5>{{@App\Employee::all()->count()}}</h5>
             </div>
             <div class="col-3 m-1  text-center p-1 card bg-warning">
                 <h4>{{__('dashboard.bills')}}</h4>
                 <h5>{{@App\Bill::all()->count()}}</h5>
             </div>
             <div class="col-3 m-1  text-center p-1 card bg-success">
                 <h4>{{__('dashboard.branches')}}</h4>
                 <h5>{{@App\Brench::all()->count()}}</h5>
             </div>
             <div class="col-3  m-1 text-center p-1 card bg-danger">
                 <h4>{{__('dashboard.expensive')}}</h4>
                 <h5>{{@App\Expense::all()->sum('amount')}}</h5>
             </div>
             <div class="col-3 m-1  text-center p-1 card bg-info">
                 <h4>{{__('dashboard.Rankings')}}</h4>
                 <div class="row">
                     <div class="col-6">
                         <h5>{{__('storage.rest')}}</h5>
                         <hr>
                         <h5>{{$rest}}</h5>
                     </div>
                     <div class="col-6">
                         <h5>{{__('money.lose')}}</h5>
                         <hr>
                         <h5>{{$lose}}</h5>
                     </div>
                 </div>
             </div>
        </div>
    </div>
@endsection
