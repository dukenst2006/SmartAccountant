@extends('adminlte::page')
@section('title', 'Employees')

@section('content_header')
    <h1>Employee</h1>
@stop



@section('content')

    <div class="row justify-content-center">



     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Employee</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('admin.employees.show_fields')
                    <a href="{{ route('admin.employees.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
