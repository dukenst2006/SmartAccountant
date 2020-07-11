@extends('adminlte::page')
@section('title', 'Marketplaces')

@section('content_header')
    <h1>{{__("menu.Marketplaces")}}</h1>
@stop



@section('content')

    <div class="row justify-content-center">



     <div class="card card-primary col-12">



              <div class="card-body">

                 <form >
                    @include('admin.marketplaces.show_fields')
                    <a href="{{ route('admin.marketplaces.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>{{__("General.Back")}}</a>
                </form>


            </div>



        </div>



    </div>
@endsection
