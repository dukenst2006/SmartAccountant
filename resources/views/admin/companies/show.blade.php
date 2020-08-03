@extends('layouts.app')
@section('title', 'الشركات')
@section('content')
    <section class="content-header">
        <h1>
            @lang('models/companies.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row form-shape" style="padding-left: 20px">
                    @include('companies.show_fields')
                    <a href="{{ route('admin.companies.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
