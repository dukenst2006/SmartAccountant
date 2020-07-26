@extends('adminlte::page')
@section('title', 'فواتير البيع')

@section('content_header')
    <h1>فواتير كتابية</h1>
@stop

@section('content')
    <main class="main">
        <!-- Start top-section -->
        <div class="logo-show-mobile">
            <img src="/Images/logo.png" class="img-fluid" alt="logo">
        </div>
        <div class="title-table">
            <div class="right-sec">
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
                    <th>المدفوع</th>
                    <th>المتبقى</th>
                </tr>
                    <tr>
                        <td>{{ $invoice->Paid }}$</td>
                        <td>{{ $invoice->Rest }}$</td>
                    </tr>
            </table>
        </div>
        <!-- End Table -->
        <!-- Start bottom-section -->
        <div class="bottom-section text-bold">
            <p>يشمل القيمة الماضفة <span>{{ auth()->user()->settings->VAT }}%</span></p>
            <span class="grand-total text-bold">المبلغ الاجمالي : <span class="en-font">${{ $invoice->Total }}</span></span>
        </div>

        <!-- End bottom-section -->
    </main>
@stop

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
