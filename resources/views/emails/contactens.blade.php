@extends('layouts.plantilla')


@section('title','Home')

@section('content')

<h1>Primer correu Elèctronic amb laravel</h1>
<p><strong>Nom:</strong>{{$contacte['name']}}</p>
<p><strong>Email:</strong>{{$contacte['email']}}</p>
<p><strong>Nom:</strong>{{$contacte['message']}}</p>
@endsection