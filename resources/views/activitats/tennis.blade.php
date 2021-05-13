@extends('layouts.navarplantilla')


@section('capcelera')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/tennis.css') }}">
@endsection



@section('body')
    <h1>CLUB TENNIS BLANES</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12 fons">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">LLOGUER PISTES DE TENNIS SOCIS GRATIS </th>
                            <th scope="col">PREU PISTA 1H</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">TERRA BATUDA 2 PERSONES</th>
                            <td>15€</td>

                        </tr>
                        <tr>
                            <th scope="row">TERRA BATUDA 4 PERSONES</th>
                            <td>20€</td>

                        </tr>
                        <tr>
                            <th scope="row">QUICK 2 PERSONES </th>
                            <td>13€</td>
                        </tr>
                        <tr>
                            <th scope="row">QUICK 4 PERSONES </th>
                            <td>15€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 ">
                <h1>ESCOLA INFANTIL</h1>
            </div>
           
            <div class="col-md-6 fons">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">PERFECCIONAMENT (1.5h/classe) MÀXIM 6 ALUMNES</th>
                            <th scope="col">SOCI</th>
                            <th scope="col">NO SOCI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 DIA A LA SETMANA </th>
                            <td>28,20€</td>
                            <td>48€</td>
                        </tr>
                        <tr>
                            <th scope="row">2 DIES A LA SETMANA</th>
                            <td>45,60€</td>
                            <td>76€</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-6 fons">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">INICIACIÓ (1h/classe) ENTRE 8-12 ALUMNES </th>
                            <th scope="col">SOCI</th>
                            <th scope="col">NO SOCI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1h/SETMANA</th>
                            <td>15€/MES</td>
                            <td>25€/MES</td>
                        </tr>
                        <tr>
                            <th scope="row">2h/SETMANA</th>
                            <td>27€/MES</td>
                            <td>45€/MES</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-12 fons">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">COMPETICIÓ (2h/classe) MÀXIM 4 ALUMNES </th>
                            <th scope="col">SOCI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 DIA A LA SETMANA</th>
                            <td>40€</td>
                        </tr>
                        <tr>
                            <th scope="row">2 DIES A LA SETMANA</th>
                            <td>80€</td>
                        </tr>
                        <tr>
                            <th scope="row">3 DIES A LA SETMANA</th>
                            <td >120€</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">*Preparació física – 1 dia a la setmana 10€/MES</td>
                        </tr>
                        <tr>
                            <td colspan="2"  style="text-align: center">>*Imprescindible fer-se soci del club per a competir per equips i afiliar-se a la
                                FTC</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <h1>ESCOLA ADULTS</h1>
            </div>
                <div class="col-md-12 fons">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">CLASSES MENSUALS</th>
                            <th scope="col">SOCI</th>
                            <th scope="col">NO SOCI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 HORA A LA SETMANA</th>
                            <td>21€</td>
                            <td>35€</td>
                        </tr>
                        <tr>
                            <th scope="row">1,5 HORES A LA SETMANA </th>
                            <td>27,60€</td>
                            <td>46€</td>
                        </tr>
                        <tr>
                            <td colspan="3"  style="text-align: center">*2 dies a la setmana: 20% dte *Forma de pagament per domiciliació bancària</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 fons">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">CLASSES PARTICULARS</th>
                            <th scope="col">SOCI</th>
                            <th scope="col">NO SOCI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1H</th>
                            <td>18€ </td>
                            <td>30€</td>
                        </tr>
                        <tr>
                            <th scope="row">1h / 2 persones</th>
                            <td>10,80€/pers.</td>
                            <td>18€/pers.</td>
                        </tr>
                        <tr>
                            <th scope="row">1h / 3 persones</th>
                            <td>7,20€/pers.</td>
                            <td>12€/pers.</td>
                        </tr>
                        <tr>
                            <th scope="row">PACK 5h: INDIVIDUAL</th>
                            <td>78€</td>
                            <td>130€</td>
                        </tr>
                        <tr>
                            <th scope="row">PACK 5h: PARELLES</th>
                            <td>42€/pers.</td>
                            <td>70€/pers.</td>
                        </tr>
                        <tr>
                            <th scope="row">PACK 5h: 3 PERSONES</th>
                            <td>30€/pers</td>
                            <td>50€/pers.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
