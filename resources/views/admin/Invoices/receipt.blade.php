@extends('adminlte::page')
@section('title', 'فواتير البيع')

@section('content_header')
    <h1>فواتير البيع</h1>
@stop

@section('content')
    <main class="main">
        <!-- Start top-section -->
        <div class="logo-show-mobile">
            <img src="/Images/logo.png" class="img-fluid" alt="logo">
        </div>
        <div class="title-table">
            <div class="right-sec">
                <p>{{ $invoice->CustomerName }}</p>
                <p>الرياض - الحمراء</p>
                <p>الرقم الضريبي <span class="en-font">(12554877)</span></p>
            </div>
            <div class="center-sec">
                <p>رقم الفاتورة</p>
                <p class="en-font">15485</p>
                <p>حالة الفاتورة (مسددة)</p>
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
                    <th>المنتجات</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                    <th>المجموع</th>
                </tr>
                @foreach($invoice->invoiceItems as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->Quantity }}</td>
                        <td>{{ $item->UnitPrice }}$</td>
                        <td>{{ $item->Total }}$</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- End Table -->
        <!-- Start bottom-section -->
        <div class="bottom-section">
            <p>يشمل القيمة الماضفة <span>{{ auth()->user()->settings->VAT }}%</span></p>
            <p>ضريبة <span>10%</span> : <span>$190</span></p>
            <span class="grand-total">المبلغ الاجمالي : <span class="en-font">${{ $invoice->Total }}</span></span>
        </div>
        <div class="barcode">
            <img src="/Images/barcode.PNG" alt="barcode">
        </div>
        <!-- End bottom-section -->
    </main>
@stop

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
