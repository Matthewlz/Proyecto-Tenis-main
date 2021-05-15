@section('title') Home @endsection
@extends('layouts.navarplantilla')
@section('body')
<form action="{{route('activitats.inscriure')}}" method="POST">
    @csrf
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <h1>{{$activitat->name}}</h1>
        </div>

    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-5">
                <h2>Extres</h2>
            </div>

        </div>
    </div>

    <main class="container pt-5">

        <table class="table table-bordered table-definition mb-5">
            <thead class="table-warning ">
                <tr>

                    <th>Name</th>
                    <th>Preu</th>
                    <th>Preu Soci</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($extres as $extre)
                    <tr>

                        <td>{{ $extre->name }}</td>
                        <td>{{ $extre->preu }}</td>
                        <td>{{ $extre->preu_soci }}</td>

                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="extres[]" value="{{$extre->id}}">
                               
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          
        </table>

    </main>

    @foreach ($opcions as $opcio)


        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center mt-5">
                    <h2>{{ $opcio->name }}</h2>
                </div>

            </div>
        </div>
        <main class="container pt-5">

            <table class="table table-bordered table-definition mb-5">
                <thead class="table-warning ">
                    <tr>

                        <th>Name</th>
                       
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apartats as $apartat)
                    @if ($apartat->opcio_id==$opcio->id)
                        <tr>
                          
                            <td>
                                <input type="hidden" name="id_activitat" value="{{$activitat->id}}">
                                {{ $apartat->name }}
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="{{$apartat->id}}" name="{{$opcio->name}}"  id="flexRadioDefault1">  
                                  </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </main>
    @endforeach
    <button  type="submit"class="btn btn-primary float-right mr-20 mt-5 mb-5">Inscriure</button>
</form>
@endsection
