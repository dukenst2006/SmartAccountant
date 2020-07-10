@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <h3 class="col-12 text-center">{{__('storage.title')}}</h3>
        <table class="table table-bordered text-center storage_table">
            <?php $total =0; ?>
            <?php $total1 =0; ?>
            <tr>
                <th>{{__('human_r.brench name')}}</th>
                <th>{{__('storage.total payed cash')}}</th>
                <th>{{__('storage.total payed credit')}}</th>
                <th>{{__('storage.total payed')}}</th>
                <th>{{__('storage.total bought')}}</th>
                <th>{{__('storage.rest')}}</th>
                <th>{{__('storage.costs')}}</th>
            </tr>
            @foreach(@App\Brench::all() as $brench)
                <tr>
                    <td>{{$brench->name}}</td>
                    @foreach($brench->bills->where('pay_way','cash') as $b)
                        <?php $total += $b->products->sum('selling_price') ?>
                    @endforeach
                    <td>{{$total}}</td>
                    <?php $total = 0; ?>
                    @foreach($brench->bills->where('pay_way','credit') as $b)
                        <?php $total += $b->products->sum('selling_price') ?>
                    @endforeach
                    <td>{{$total}}</td>
                    <?php $total = 0; ?>
                    @foreach($brench->bills as $b)
                        <?php $total += $b->products->sum('selling_price') ?>
                    @endforeach
                    <td>{{$total}}</td>
                    @foreach($brench->bills as $b)
                        <?php $total1 += $b->products->sum('buying_price') ?>
                    @endforeach
                    <td>{{$total1}}</td>
                    <td>{{$total - $total1}}</td>
                    <?php $total = 0; ?>
                    <?php $total1 = 0; ?>
                    <td>0</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4">{{__('storage.total payed cash')}}</td>
                <td colspan="3">
                    @foreach(@App\Bill::all()->where('pay_way','cash') as $b)
                        <?php $total += $b->products->sum('selling_price') ?>
                    @endforeach
                    {{$total}}
                    <?php $total = 0 ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">{{__('storage.total payed credit')}}</td>
                <td colspan="3">
                    @foreach(@App\Bill::all()->where('pay_way','credit') as $b)
                        <?php $total += $b->products->sum('selling_price') ?>
                    @endforeach
                    {{$total}}
                    <?php $total = 0 ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">{{__('storage.total payed')}}</td>
                <td colspan="3">
                    @foreach(@App\Bill::all() as $b)
                        <?php $total += $b->products->sum('selling_price') ?>
                    @endforeach
                    {{$total}}
                </td>
            </tr>
            <tr>
                <td colspan="4">{{__('storage.total bought')}}</td>
                <td colspan="3">
                    @foreach(@App\Bill::all() as $b)
                        <?php $total1 += $b->products->sum('buying_price') ?>
                    @endforeach
                    {{$total1}}
                </td>
            </tr>
            <tr>
                <td colspan="4">{{__('storage.rest')}}</td>
                <td colspan="3">
                    {{$rest =  $total - $total1}}
                </td>
            </tr>
            <tr>
                <td colspan="4">{{__('storage.costs')}}</td>
                <td colspan="3">
                    {{@App\Expense::all()->sum('amount')}}
                </td>
            </tr>
            <tr>
                <td colspan="4">{{__('storage.filtered')}}</td>
                <td colspan="3">
                    {{$rest - @App\Expense::all()->sum('amount')}}
                </td>
            </tr>
        </table>
    </div>
@endsection
