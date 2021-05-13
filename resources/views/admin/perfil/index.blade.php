
@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')
    <h1>Informacio de perfil</h1>
@stop

@section('content')
   {{auth()->user()->id}}
@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/livewire/perfil.css')}}">
@stop

@section('js')
@livewireScripts
    <script> console.log('Admin!'); </script>
@stop
