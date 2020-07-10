<table class="table table-hover table-bordered" id="marketplaces-table">
    <thead>
        <tr>
            <th class="text-center">Name</th>

        <th class="text-center">Email</th>

        <th class="text-center">Emailverifiedat</th>

        <th class="text-center">Password</th>

        <th class="text-center">Remember Token</th>


        <th tabindex="0" rowspan="1" class="text-center" style="min-width: 180px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td class="text-center">{{ $user->Name }}</td>

            <td class="text-center">{{ $user->Email }}</td>

            <td class="text-center">{{ $user->EmailVerifiedAt }}</td>

            <td class="text-center">{{ $user->Password }}</td>

            <td class="text-center">{{ $user->remember_token }}</td>

            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='form-group'>
                    <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-warning btn-sm p-1'><i class="fas fa-2x fa-eye"></i></a>
                    <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-primary btn-sm p-1'><i class="fas fa-2x fa-edit"></i></a>
                    {!! Form::button('<i class="fas fa-2x fa-trash text-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
