@section('title') Home @endsection
@extends('layouts.navarplantilla')
@section('body')

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
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ $extre->name }}</label>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th colspan="4">
                        <button class="btn btn-primary float-right">Inscriure</button>
                    </th>
                </tr>
            </tfoot>
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
                            <td>{{ $apartat->name }}</td>
                           

                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th colspan="4">
                            <button class="btn btn-primary float-right">Inscriure</button>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </main>
    @endforeach
@endsection
