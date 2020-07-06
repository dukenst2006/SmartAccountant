@extends('adminlte::page')
@section('title', 'Expenses Categories')

@section('content_header')
    <h1>Expenses Category</h1>
@stop



@section('content')

    <div class="row justify-content-center">


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Expenses Category</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('admin.expenses_categories.show_fields')
                    <a href="{{ route('admin.expensesCategories.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
