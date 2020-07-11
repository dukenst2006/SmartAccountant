@extends('adminlte::page')
@section('title', 'Suppliers')

@section('content_header')
    <h1>{{__("General.Titles.Suppliers")}}</h1>
@stop



@section('content')

    <div class="row justify-content-center">



        <div class="card card-primary col-12">

            <div class="card-body">

                <form >
                    @include('admin.suppliers.show_fields')
                    <a href="{{ route('admin.suppliers.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>{{__("General.Back")}}</a>
                </form>


            </div>



        </div>



    </div>
@endsection
