@extends('adminlte::page')
@section('title', 'Suppliers')

@section('content_header')
    <h1>{{__('Models/SupplierInvoices.SupplierInvoice')}}</h1>
@stop

@section('content')
    <div class="row justify-content-center">

        {{-- Cards --}}
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">{{__('Models/SupplierInvoices.CraeteNewSupplierInvoice')}}</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
                <div class="text-center">
                    <div class="card-body p-0 ">
                        {!! Form::open(['route' => 'admin.supplier-invoice.store', 'method' => 'post']) !!}
                            
                            {!! Form::token() !!} 

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('SupplierID', __('Models/SupplierInvoices.Supplier')) !!}
                                {!! Form::select('SupplierID',$suppliers, null,['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Amount', __('Models/SupplierInvoices.Amount')) !!}
                                {!! Form::text('Amount', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Total', __('Models/SupplierInvoices.Total')) !!}
                                {!! Form::text('Total', null, ['class' => 'form-control']) !!}
                            </div>



                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Paid', __('Models/SupplierInvoices.Paid')) !!}
                                {!! Form::text('Paid', null, ['class' => 'form-control']) !!}
                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Rest', __('Models/SupplierInvoices.Rest')) !!}
                                {!! Form::text('Rest', null, ['class' => 'form-control']) !!}
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
    </div>
@endsection




