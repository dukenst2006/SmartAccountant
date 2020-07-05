{!! Form::open(['route' => ['admin.marketplaces.destroy', $ID], 'method' => 'delete']) !!}
<div class='form-group'>
    <a href="{{ route('admin.marketplaces.show', $ID) }}" class='btn btn-warning btn-sm p-1'>
        <i class="fas fa-2x fa-eye"></i>
    </a>
    <a href="{{ route('admin.marketplaces.edit', $ID) }}" class='btn btn-primary btn-sm p-1'>
        <i class="fas fa-2x fa-edit"></i>
    </a>
    {!! Form::button('<i class="fas fa-2x fa-trash text-white"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
