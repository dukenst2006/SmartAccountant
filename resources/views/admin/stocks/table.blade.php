<table class="table table-hover table-bordered" id="marketplaces-table">
    <thead>
        <tr>
            <th class="text-center">Marketplacesownerid</th>

        <th class="text-center">Marketplacesid</th>


        <th tabindex="0" rowspan="1" class="text-center" style="min-width: 180px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stocks as $stock)
        <tr>
            <td class="text-center">{{ $stock->MarketplacesOwnerID }}</td>

            <td class="text-center">{{ $stock->MarketplacesID }}</td>

            <td>
                {!! Form::open(['route' => ['stocks.destroy', $stock->id], 'method' => 'delete']) !!}
                <div class='form-group'>
                    <a href="{{ route('stocks.show', [$stock->id]) }}" class='btn btn-warning btn-sm p-1'><i class="fas fa-2x fa-eye"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
