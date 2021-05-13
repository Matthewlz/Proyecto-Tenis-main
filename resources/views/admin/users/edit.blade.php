@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')
    <h1>Informacio del usuari</h1>
@stop

@section('content')

@livewire('admin.profile-index',['user' => $user])



@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/livewire/perfil.css')}}">
@stop

@section('js')
@livewireScripts
    <script> console.log('Admin!'); </script>
@stop
