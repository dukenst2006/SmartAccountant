@extends('vendor.adminlte.master')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
{{-- Cards --}}
<div id="app">

    <router-view></router-view>

<hr>

    <router-link to="/"> About</router-link>
    <router-link to="/about"> Home</router-link>

</div >


@stop



@section('js')
    <script src='/js/app.js'> </script>
@stop
