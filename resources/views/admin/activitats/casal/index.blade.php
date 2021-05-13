
@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')
   
@stop

@section('content')
@livewire('admin.activity-casal-create')
@stop

@section('css')

@stop

@section('js')
@livewireScripts
<script src="{{ asset('js/casal.js') }}" defer></script>
    <script> console.log('Admin!'); </script>
@stop
