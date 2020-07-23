@extends('adminlte::page')
@section('title', 'Employees')

@section('content_header')
    <h1>{{__('General.Titles.Employee')}}</h1>
@stop



@section('content')

    <div class="row justify-content-center">



     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">{{__('General.Titles.Employee')}}</h3>
            </div>


              <div class="card-body" style="padding: 20px !important;">

                 <form class="lye-emp" >
                    @include('admin.employees.show_fields')
                    <a href="{{ route('admin.employees.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i> رجوع </a>
                </form>


            </div>



        </div>



    </div>
@endsection
