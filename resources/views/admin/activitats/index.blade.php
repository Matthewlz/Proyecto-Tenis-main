
@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')
   
@stop

@section('content')
@livewire('admin.activity-index')
@stop

@section('css')

@stop

@section('js')
@livewireScripts

<link rel="stylesheet" href="{{asset('css/livewire/perfilCrear.css')}}">
    <script> console.log('Admin!'); </script>
@stop
