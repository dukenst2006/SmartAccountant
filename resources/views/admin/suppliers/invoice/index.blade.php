@extends('adminlte::page')
@section('title', 'فواتير الموردين ')

@section('content_header')
    <h1>{{__("General.Titles.Suppliers")}}</h1>
@stop

@section('content')
    <div class="row justify-content-center">

        {{-- Cards --}}
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">{{__("General.All")}}</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')

                <div class="text-center">
                    <table class="table table-striped" style="min-width: 700px">
                        <thead class="text-center">
                        <tr class="rest-color" style="color: #FFF;background-color: #5b75b5">
                            <th class="dolamah" scope="col">
                                مسلسل
                            </th>
                            <th scope="col">
                                {{ __('Models/SupplierInvoices.Supplier') }}
                            </th>
                            <th scope="col">
                                {{ __('Models/Invoice.PaymentTypeID') }}
                            </th>
                            <th scope="col">
                                {{ __('Models/SupplierInvoices.InvoiceCode') }}
                            </th>
                            <th scope="col">
                                {{ __('Models/SupplierInvoices.Total') }}
                            </th>
                            <th scope="col">
                                {{ __('Models/SupplierInvoices.Paid') }}
                            </th>
                            <th scope="col">
                                {{ __('Models/SupplierInvoices.Rest') }}
                            </th>
                            <!-- <th scope="col">الوضع</th> -->
                            <th class="dolamah" scope="col">اجراءات</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($supplierInvoices as $invoice)
                        <tr>
                            <td class="dolamah">
                                <a title="عرض" href="{{ route('admin.supplier-invoice.show', $invoice->id) }}" class='btn btn-warning btn-sm' style="color: #ffffff">
                                    <i class="fas fa-2x fa-eye"></i>
                                </a>
                            </td>
                            <td class="text-info">{{ $invoice->supplier->Name }}</td>
                            <td>{{ $invoice->paymenttype->Name }}</td>
                            <td>{{ $invoice->invoice_code }}</td>
                            <td>{{ $invoice->Amount }}$</td>
                            <td>{{ $invoice->Paid }}$</td>
                            <td>{{ $invoice->Rest }}$</td>
                            <!-- <td><input type="checkbox"> </td> -->
                            <td class="dolamah">
                                <!-- <a title="بحث"  href="" class="text-dark"><i class="fas fa-search"></i></a>
                                <a title="تعديل" href="" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                                <a title="طباعة" href="" class="" style="color: #e87c85"><i class="fas fa-print"></i></a>
                                <a title="تحميل" href="" class="text-success"><i class="fas fa-download"></i></a>
                                <a title="ارسال ايميل" href="" class="" style="color: #6a6a6a"><i class="fas fa-envelope"></i></a>
                                <a title="السلة" href="" class="" style="color: #3b5998"><i class="fas fa-shopping-cart"></i></a> -->
                                <a title="حذف" href="Admin/supplier-invoice/{{ $invoice->id }}/delete" class="text-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection




