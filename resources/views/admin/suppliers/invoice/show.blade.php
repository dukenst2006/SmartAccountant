@extends('adminlte::page')
@section('title', 'فواتير البيع')

@section('content_header')
    <h1>فاتورة مورد</h1>
@stop

@section('content')
    <main class="main">
        <!-- Start top-section -->
        <div class="logo-show-mobile">
            <img src="/Images/logo.png" class="img-fluid" alt="logo">
        </div>
        <div class="title-table">
            <div class="right-sec">
                <img src="/Images/barcode.png" class="img-fluid" alt="logo" width="100" height="50">
                <p>الرياض - الحمراء</p>
                <p>الرقم الضريبي <span class="en-font">(12554877)</span></p>
            </div>
            <div class="center-sec">
                <p>رقم الفاتورة: {{ $invoice->invoice_code }}</p>
                <p class="en-font"> <b>  {{ $invoice->id }} #</b>
                <p>
                    حالة الفاتورة {{ ($invoice->Rest != 0)? "(غير مسدد)" : "(مسدد)" }}
                </p>
            </div>
            <div class="logo">
                <img src="/Images/logo.png" class="img-fluid" alt="logo">
            </div>
        </div>
        <!-- End top-section -->
        <!-- Start Table -->
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>اسم المورد</th>
                    <th>طريقة الدفع</th>
                    <th>المدفوع</th>
                    <th>المتبقى</th>
                </tr>
                    <tr>
                        <td>{{ $invoice->supplier->Name }}</td>
                        <td>{{ $invoice->paymenttype->Name }}</td>
                        <td>{{ $invoice->Paid }}$</td>
                        <td>{{ $invoice->Rest }}$</td>
                    </tr>
            </table>
        </div>
        <!-- End Table -->
        <!-- Start bottom-section -->
        <div class="bottom-section text-bold">
            <p>يشمل القيمة الماضفة <span>{{ auth()->user()->settings->VAT }}%</span></p>
            <span class="grand-total text-bold">المبلغ الاجمالي : <span class="en-font">${{ $invoice->Amount }}</span></span>
        </div>

        <!-- End bottom-section -->
    </main>
@stop

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
