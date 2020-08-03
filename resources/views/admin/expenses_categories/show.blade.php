@extends('adminlte::page')
@section('title', 'اقسام المصروفات الرئيسية')


@section('content_header')
    <h1>{{__('Models/Expenses.ExpensesMainCategory')}}</h1>
@stop



@section('content')

    <div class="row justify-content-center">


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">{{__('Models/Expenses.ExpensesMainCategory')}}</h3>
            </div>


              <div class="card-body">

                 <form  class="form-shape">
                    @include('admin.expenses_categories.show_fields')
                    <a href="{{ route('admin.expensesCategories.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i> رجوع</a>
                </form>


            </div>



        </div>



    </div>
@endsection
