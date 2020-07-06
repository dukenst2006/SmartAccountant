@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '50%', 'class' => 'table table-striped table-bordered compact']) !!}

@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush
