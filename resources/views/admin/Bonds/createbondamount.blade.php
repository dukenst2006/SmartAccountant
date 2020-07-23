@extends('adminlte::page')
@section('title', 'New Bond')

@section('content_header')
    <h1>سند جديد</h1>
@stop

@section('content')

<div id="root">

    <div class="row justify-content-center animated bounceInUp">
        <div class="col-10">
            <div class="card" style="font-family: 'Cairo', sans-serif;font-weight: 900;">
                <div class="card-header">
                    <h3 class="card-title">تفاصيل الفاتورة</h3>
                </div>
                <div class="card-body p-0 ">
                    {!! Form::open(['route' => 'admin.bondsammout.store', 'method' => 'post']) !!}

                        {!! Form::token() !!}

                        <div class="form-group row col-sm-6 m-3">
                            {!! Form::label('client_name', 'اسم العميل') !!}
                            {!! Form::text('client_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group row col-sm-6 m-3">
                            {!! Form::label('ammount_date', 'التاريخ') !!}
                            {!! Form::date('ammount_date', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group row col-sm-6 m-3">
                            {!! Form::label('ammount', 'المبلغ') !!}
                            {!! Form::number('ammount', '0', ['class' => 'form-control']) !!}
                        </div>



                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('Home') }}" class="btn btn-default">{{__('Buttons.Cancel')}}</a>
                            </div>

                    {!! Form::close() !!}
                </div>


















            </div>
        </div>
    </div>
</div>


@endsection

@section('adminlte_css')
    <link rel="stylesheet" href="{{asset('css/xselect2-bootstrap.min.css')}}">

@endsection
