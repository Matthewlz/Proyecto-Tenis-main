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
    <link rel="stylesheet" href="{{ asset('css/casal.css') }}">
@endsection



@section('body')

    <div class="container mt-20 mb-20">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h1>CASAL D'ESTIU 2021 - CT BLANES</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-fist">
                <label>Nom de l'alumne (nom i 2 cognoms)</label>
            </div>
            <div class="col-md-6 d-flex justify-content-first">
                <label>Adreça</label>
            </div>
            <div class=" col-md-6 d-flex justify-content-first pl-20">
                <input type="text" style="width: 300px" id="adreca" name="adreca" class="formulari-input">
            </div>
            <div class="col-md-6 d-flex justify-content-first">
                <input type="text" style="width: 300px" id="nomComplet" name="nomComplet" class="formulari-input">
            </div>
            <div class="col-md-4 d-flex justify-content-fist">
                <label>Població</label>
            </div>
            <div class="col-md-4 d-flex justify-content-fist">
                <label>C.P.</label>
            </div>
            <div class="col-md-4 d-flex justify-content-fist">
                <label>Provincia </label>
            </div>
            <div class="col-md-4 d-flex justify-content-first">
                <input type="text" style="width: 300px" id="poblacio" name="poblacio" class="formulari-input">
            </div>
            <div class="col-md-4 d-flex justify-content-first">
                <input type="text" style="width: 300px" id="codiP" name="codiP" class="formulari-input">
            </div>
            <div class="col-md-4 d-flex justify-content-first">
                <input type="text" style="width: 300px" id="provincia" name="provincia" class="formulari-input">
            </div>
            <div class="col-md-4 d-flex justify-content-fist">
                <label>Data de naixement</label>
            </div>
            <div class="col-md-4 d-flex justify-content-fist">
                <label>nº Cat Salut</label>
            </div>
            <div class="col-md-4 d-flex justify-content-fist">
                <label>nº Conte bancari (20 dígits)</label>
            </div>
            <div class="col-md-4 d-flex justify-content-first">
                <input type="date" style="width: 300px" id="tel1" name="tel1" class="formulari-input">
            </div>
            <div class="col-md-4 d-flex justify-content-first">
                <input type="number" style="width: 300px" id="tel1" name="tel1" class="formulari-input">
            </div>
            <div class="col-md-4 d-flex justify-content-first">
                <input type="number" style="width: 300px" id="tel1" name="tel1" class="formulari-input">
            </div>
            <div class="col-md-6 d-flex justify-content-first">
                <label>Telèfon 1</label>
            </div>
            <div class="col-md-6 d-flex justify-content-fist">
                <label>Telèfon 2</label>
            </div>
            <div class="col-md-6 d-flex justify-content-first">
                <input type="number" style="width: 300px" id="tel1" name="tel1" class="formulari-input">
            </div>
            <div class="col-md-6 d-flex justify-content-first">
                <input type="number" style="width: 300px" id="tel2" name="tel2" class="formulari-input">
            </div>
            <div class="col-md-6 d-flex justify-content-first">
                <label>Nom del titular (nom i dos cognoms)</label>
            </div>
            <div class="col-md-6 d-flex justify-content-fist">
                <label>NIF del titular</label>
            </div>
            <div class=" col-md-6 d-flex justify-content-first pl-20">
                <input type="text" style="width: 300px" id="titular" name="titular" class="formulari-input">
            </div>
            <div class=" col-md-6 d-flex justify-content-first pl-20">
                <input type="text" style="width: 300px" id="nifT" name="nifT" class="formulari-input">
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <label>EMAIL</label>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <input type="email" style="width: 300px" id="email" name="email" class="formulari-input">
            </div>
            <div class="col-md-12 d-flex justify-content-center mt-10">
                <label>BLOC 1 JUNY - JULIOL</label>
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>DIA 23 de Juny</label>

                <input type="checkbox" id="b1_1" name="b1_1" value="b1_1">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>DIA 25 de Juny</label>

                <input type="checkbox" id="b1_2" name="b1_2" value="b1_2">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 1: 28 de juny al 2 de juliol</label>

                <input type="checkbox" id="b1_3" name="b1_3" value="b1_3">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 2: 5 de juliol al 9 de juliol</label>

                <input type="checkbox" id="b1_4" name="b1_4" value="b1_4">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 3: 12 de juliol al 16 de juliol</label>

                <input type="checkbox" id="b1_5" name="b1_5" value="b1_5">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 4: 19 de juliol al 23 de juliol</label>

                <input type="checkbox" id="b1_6" name="b1_6" value="b1_6">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 5: 26 de juliol al 30 de juliol (festa 26 juliol)</label>
                <input type="checkbox" id="b1_7" name="b1_7" value="b1_7">
            </div>
            <div class="col-md-10 d-flex justify-content-center " style="background: orange">
            </div>



            <div class="col-md-12 d-flex justify-content-center mt-10">
                <label>BLOC 2 AGOST - SETEMBRE</label>
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 1: 2 d'agost al 6 d'agost</label>

                <input type="checkbox" id="b2_1" name="b2_1" value="b2_1">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 2:9 d'agost al 13 d'agost (festa 15 agost)</label>

                <input type="checkbox" id="b2_2" name="b2_2" value="b2_2">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 3: 16 d'agost al 20 d'agost</label>

                <input type="checkbox" id="b2_3" name="b2_3" value="b2_3">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 4: 23 d'agost al 27 d'agost</label>

                <input type="checkbox" id="b2_4" name="b2_4" value="b2_4">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 5: 30 d` agost al 3 de setembre</label>
                <input type="checkbox" id="b2_5" name="b2_5" value="b2_5">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>SETMANA 6: 6 de setembre al 10 setembre (festa 11 set)</label>
                <input type="checkbox" id="b2_6" name="b2_6" value="b2_6">
            </div>


            <div class="col-md-12 d-flex justify-content-center mt-10">
                <label>HORARIS Matins</label>
            </div>
            
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>ESTADA MATINS MENJADOR 9 A 13 H </label>

                <input type="checkbox" id="m_1" name="m_1" value="m_1">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>MENJADOR 13 A 15 H</label>
                <input type="checkbox" id="m_2" name="m_2" value="m_2">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>CAMPUS JUVENIL HORA DE PERMANENCIA (GRATUÏTA) 9 A 13 H</label>
                <input type="checkbox" id="m_3" name="m_3" value="m_3">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>HORA DE PERMANENCIA (GRATUÏTA) 9 A 13 H 7`45H A 9 H</label>
                <input type="checkbox" id="m_4" name="m_4" value="m_4">
            </div>
            <div class="col-md-4 d-flex justify-content-center" style="background: orange">
              
          </div>
          <div class="col-md-12 d-flex justify-content-center mt-10">
            <label>HORARIS Tardes</label>
        </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>TENNIS</label>

                <input type="checkbox" id="t_1" name="t_1" value="t_1">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>PÀDEL</label>
                <input type="checkbox" id="t_2" name="t_2" value="t_2">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>NATACIÓ</label>
                <input type="checkbox" id="t_3" name="t_3" value="t_3">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
                <label>RAQUETA (si necessita comprar raqueta)</label>
                <input type="checkbox" id="t_4" name="t_4" value="t_4">
            </div>
            <div class="col-md-2 d-flex justify-content-center" style="background: orange">
              <label>PALA (si necessita comprar pala)</label>
              <input type="checkbox" id="t_5" name="t_5" value="t_5">
          </div>
          <div class="col-md-2 d-flex justify-content-center" style="background: orange">
           
        </div>
        <div class="col-md-12 d-flex justify-content-center mt-10 mb-5">
          <input type="submit"value="Enviar">
      </div>

        </div>
    </div>
    </div>
    </div>

    </body>

    </html>

@endsection
