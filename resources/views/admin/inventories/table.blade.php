<div class="table-responsive">
    <table class="table table table-hover table-bordered table-dark " id="inventories-table ">
        <thead>
        <tr>
            <th class="text-center">{{__('Models/Marketplace.Name')}}</th>
            <th class="text-center">{{__('Models/Inventory.ProductCount')}}</th>

            <th colspan="3">أجراء</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inventories as $inventory)
            <tr   {{ $inventory->products_count ==0 ? 'class=bg-danger':'' }} >

                <td class="text-center">{{ $inventory->marketplace->Name }}</td>
                <td class="text-center">{{ $inventory->products_count }}</td>

                <td class="text-center">

                    <div class='btn-group'>
                        <a href="{{ route('admin.inventories.show', [$inventory->id]) }}"
                           class='btn btn-warning btn-sm p-1'><i class="fas fa-2x fa-eye"></i></a>
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>






