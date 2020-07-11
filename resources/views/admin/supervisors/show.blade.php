@extends('adminlte::page')
@section('title', 'Supervisors')

@section('content_header')
    <h1>{{__("menu.Supervisors")}}</h1>
@stop



@section('content')

    <div class="row justify-content-center">

     <div class="card card-primary col-12">
              <div class="card-body">

                 <form >
                    @include('admin.supervisors.show_fields')
                    <a href="{{ route('admin.supervisors.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>{{__("General.Back")}}</a>
                </form>


            </div>



        </div>



    </div>
@endsection
