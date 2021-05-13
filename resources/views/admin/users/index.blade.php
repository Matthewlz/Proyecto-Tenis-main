
@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')
    <h1>Llistat de Usuaris</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/livewire/perfil.css')}}">
@stop

@section('js')
@livewireScripts
    <script> console.log('Hi!'); </script>
@stop
