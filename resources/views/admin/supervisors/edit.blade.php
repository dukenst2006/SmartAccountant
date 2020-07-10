@extends('adminlte::page')
@section('title', 'Supervisor')

@section('content_header')
     <h1>
            Supervisor
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Supervisor</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($supervisor, ['route' => ['admin.supervisors.update', $supervisor->id], 'method' => 'patch']) !!}

                        @include('admin.supervisors.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
