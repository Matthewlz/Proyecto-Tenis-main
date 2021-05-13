
@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')
   
@stop

@section('content')
@livewire('admin.restaurant-plat')
@stop

@section('css')

@stop

@section('js')
@livewireScripts
    <script> console.log('Admin!'); </script>
@stop
