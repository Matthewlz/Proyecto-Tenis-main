
@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')
   
@stop

@section('content')
@livewire('admin.restaurant-plat-create')
@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/livewire/perfil.css')}}">
@stop

@section('js')
@livewireScripts
    <script> console.log('Admin!'); </script>
@stop
