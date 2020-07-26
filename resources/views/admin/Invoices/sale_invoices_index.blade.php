@extends('adminlte::page')
@section('title', 'الفواتير')

@section('content_header')
    <h1 class="mb-3"><i class="fas fa-file-invoice-dollar"></i> الفواتير </h1>
@stop


@section('content')

<div class="main-tbl" style="overflow:auto;">
    <table class="table table-striped" style="min-width: 1000px">
        <thead class="text-center">
        <tr style="color: #FFF;background-color: #5b75b5">
            <th>مسلسل</th>
            <th scope="col">اسم الفرع</th>
            <th scope="col">طريقة الدفع</th>
            <th scope="col">كود الفاتورة</th>
            <th scope="col">الأسم</th>
            <th scope="col">الاجمالي</th>
            <th scope="col">المدفوع</th>
            <th scope="col">المتبقي</th>
            <th scope="col">حالة الفاتورة</th>
            <!-- <th scope="col">الوضع</th> -->
            <th scope="col">اجراءات</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @if(!empty($sale_invoices))
        @foreach($sale_invoices as $invoice)
        <tr>
            <td>
                <a title="عرض" href="{{ route('admin.sale_invoice.show', $invoice->id) }}" class='btn btn-warning btn-sm' style="color: #ffffff">
                    <i class="fas fa-2x fa-eye"></i>
                </a>
            </td>
            <td>{{ $invoice->marketplace->Name }}</td>
            <td class="text-info">{{ $invoice->paymenttype->Name }}</td>
            <td class="text-info">{{ $invoice->invoice_code }}</td>
            <td>{{ $invoice->CustomerName }}</td>
            <td class="text-info">{{ $invoice->Total }}</td>
            <td>{{ $invoice->Paid }}</td>
            <td>{{ $invoice->Rest }}</td>
            <td><small>{{ ($invoice->Rest != 0)? "غير مسدد" : "مسدد" }}</small></td>
            <!-- <td><input type="checkbox"> </td> -->
            <td>
            {{--
                 <a title="بحث"  href="" class="text-dark"><i class="fas fa-search"></i></a>
                <a title="تعديل" href="" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                <a title="طباعة" href="" class="" style="color: #e87c85"><i class="fas fa-print"></i></a>
                <a title="تحميل" href="" class="text-success"><i class="fas fa-download"></i></a>
                <a title="ارسال ايميل" href="" class="" style="color: #6a6a6a"><i class="fas fa-envelope"></i></a>
                <a title="السلة" href="" class="" style="color: #3b5998"><i class="fas fa-shopping-cart"></i></a>
                --}}
                <a title="تعديل" href="sale-invoice/{{ $invoice->id }}/edit" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                <a title="حذف" href="sale-invoice/{{ $invoice->id }}/delete" class="text-danger"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        @else
            <h3 class="text-center">لا توجد فواتير للعرض</h3>
        @endif
        </tbody>
    </table>
</div>



@stop
