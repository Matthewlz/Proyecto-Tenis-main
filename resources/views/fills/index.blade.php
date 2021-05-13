
@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')

@stop

@section('content')
    @livewire('admin.fills-index')
@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/livewire/perfil.css')}}">
@stop

@section('js')
@livewireScripts
    <script> console.log('Hi!'); </script>
@stop
