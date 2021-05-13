@extends('adminlte::page')

@section('title', 'Club Tennis i Pàdel Blanes')

@section('content_header')


@stop

@section('content')

@livewire('admin.gallery-create')



@stop

@section('css')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/livewire/upload.css')}}">
@stop

@section('js')
@livewireScripts
    <script> console.log('Admin!'); </script>
 
@stop
