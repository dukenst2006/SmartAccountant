@extends('adminlte::page')
@section('title', 'فاتوره جديده')

@section('content_header')
    <h1>فاتورة جديده</h1>
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
                        {!! Form::open(['route' => 'admin.invoice.storerowinvoice', 'method' => 'post']) !!}
                            
                            {!! Form::token() !!} 

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('MarketplaceID', __('Models/Marketplace.Name')) !!}
                                {!! Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('PaymentTypeID', __('Models/Invoice.PaymentTypeID')) !!}
                                {!! Form::select('PaymentTypeID',$payment_types, null,['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('CustomerName', __('Models/Invoice.Name')) !!}
                                {!! Form::text('CustomerName', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Total', __('Models/Invoice.Total')) !!}
                                {!! Form::text('Total', null, ['class' => 'form-control']) !!}
                            </div>



                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Paid', __('Models/Invoice.Paid')) !!}
                                {!! Form::text('Paid', null, ['class' => 'form-control']) !!}
                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Rest', __('Models/Invoice.Rest')) !!}
                                {!! Form::text('Rest', null, ['class' => 'form-control']) !!}
                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('RawFile', __('Models/Invoice.File')) !!}
                                {!! Form::file('RawFile', ['class' => 'form-control']) !!}
                            </div>



                        </div>


                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-lg btn-success">{{ __('Buttons.Save') }}</button>
                            <button class="btn btn-lg btn-default">{{ __('Buttons.Cancel') }}</button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>



    </div>



@stop


@section('adminlte_css')
    <link rel="stylesheet" href="{{asset('css/xselect2-bootstrap.min.css')}}">

@endsection

