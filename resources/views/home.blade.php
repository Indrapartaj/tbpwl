@extends('adminlte::page')

@section('title', 'Gudang Garam')

@section('content_header')
    <h1>Gudang Garam</h1>
@stop



@section('content')
    <p>Welcome to Gudang Garam</p>
    <p>login as user</p>
@stop

@section('footer')
<div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.0
</div>
<strong>Copy Right &copy; {{date('Y')}}
    <a href="#" target="_blank">666Gudang Garam666</a>.</strong>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop