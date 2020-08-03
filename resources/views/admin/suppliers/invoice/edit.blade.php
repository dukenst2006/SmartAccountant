@extends('adminlte::page')
@section('title', 'فواتير الموردين ')

@section('content_header')
    <h1>{{__('Models/SupplierInvoices.SupplierInvoice')}}</h1>
@stop

@section('content')
    <div class="row justify-content-center">

        {{-- Cards --}}
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">تعديل فاتورة رقم {{ $invoice->invoice_code }}</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
                <div class="text-center">
                    <div class="card-body p-0 ">
                        {!! Form::open(['route' => ['admin.supplier-invoice.update', $invoice->id], 'method' => 'put']) !!}
                            
                            {!! Form::token() !!} 

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('SupplierID', __('Models/SupplierInvoices.Supplier')) !!}
                                {!! Form::select('SupplierID',$suppliers, $invoice->SupplierID,['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('PaymentTypeID', __('Models/Invoice.PaymentTypeID')) !!}
                                {!! Form::select('PaymentTypeID',$payment_types, $invoice->PaymentType,['class' => 'form-control']) !!}
                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Total', __('Models/SupplierInvoices.Total')) !!}
                                {!! Form::text('Amount', $invoice->Amount, ['class' => 'form-control']) !!}
                            </div>



                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Paid', __('Models/SupplierInvoices.Paid')) !!}
                                {!! Form::text('Paid', $invoice->Paid, ['class' => 'form-control']) !!}
                            </div>


                            <div class="form-group row col-sm-6 m-3">
                                {!! Form::label('Rest', __('Models/SupplierInvoices.Rest')) !!}
                                {!! Form::text('Rest', $invoice->Rest, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Description Field -->
                            <div class="orm-group row col-sm-6 m-3">
                                {!! Form::label('note', __('Models/SupplierInvoices.note').':') !!}
                                {!! Form::textarea('Description',  $invoice->note, ['class' => 'form-control']) !!}
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