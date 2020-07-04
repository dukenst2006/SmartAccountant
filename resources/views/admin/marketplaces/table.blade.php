
<table class="table table-hover table-bordered" id="marketplaces-table">
    <thead>
        <tr>
            <th class="text-center">Marketplaceownerid</th>

        <th class="text-center">Name</th>

        <th class="text-center">Country</th>

        <th class="text-center">City</th>

        <th class="text-center">Supervisorphonenumber</th>

        <th class="text-center">Address</th>

        <th class="text-center">Taxnumber</th>

        <th class="text-center">Email</th>

        <th class="text-center">Latitude</th>

        <th class="text-center">Longitude</th>

        <th class="text-center">Companyregisterimage</th>

        <th class="text-center">Logo</th>


        <th tabindex="0" rowspan="1" class="text-center" style="min-width: 180px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($marketplaces as $marketplace)
        <tr>
            <td class="text-center">{{ $marketplace->MarketplaceOwnerID }}</td>

            <td class="text-center">{{ $marketplace->Name }}</td>

            <td class="text-center">{{ $marketplace->Country }}</td>

            <td class="text-center">{{ $marketplace->City }}</td>

            <td class="text-center">{{ $marketplace->SupervisorPhoneNumber }}</td>

            <td class="text-center">{{ $marketplace->Address }}</td>

            <td class="text-center">{{ $marketplace->TaxNumber }}</td>

            <td class="text-center">{{ $marketplace->Email }}</td>

            <td class="text-center">{{ $marketplace->Latitude }}</td>

            <td class="text-center">{{ $marketplace->Longitude }}</td>

            <td class="text-center">{{ $marketplace->CompanyRegisterImage }}</td>

            <td class="text-center">{{ $marketplace->Logo }}</td>

            <td>
                {!! Form::open(['route' => ['admin.marketplaces.destroy', $marketplace->ID], 'method' => 'delete']) !!}
                <div class='form-group'>
                    <a href="{{ route('admin.marketplaces.show', [$marketplace->ID]) }}" class='btn btn-warning btn-sm p-1'><i class="fas fa-2x fa-eye"></i></a>
                    <a href="{{ route('admin.marketplaces.edit', [$marketplace->ID]) }}" class='btn btn-primary btn-sm p-1'><i class="fas fa-2x fa-edit"></i></a>
                    {!! Form::button('<i class="fas fa-2x fa-trash text-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
