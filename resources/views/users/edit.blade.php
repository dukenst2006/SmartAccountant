@extends('adminlte::page')
@section('title', 'User')

@section('content_header')
     <h1>
            User
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">User</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                        @include('users.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
