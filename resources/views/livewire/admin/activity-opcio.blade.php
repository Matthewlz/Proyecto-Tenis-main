<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Introdueix un usuari">
        </div>
        @if($opcions->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Preu Normal</th>
                        <th>Preu Soci</th>
                        <th> <a class="btn btn-primary" href="{{route('admin.opcio.create')}}">Afegir</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($opcions as $opcio)
                        <tr>
                            <td>{{$opcio->id}}</td>
                            <td>{{$opcio->name}}</td>
                            <td>{{$opcio->preu}}€</td>
                            <td>{{$opcio->preu_soci}}€</td>
                            <td  style="width: 86px "><a class="btn btn-dark" href="{{route('apartat.index',$opcio->id)}}">VisualitzarOpcions</a></td>
                            <td  style="width: 86px "><a class="btn btn-success" href="#">Editar</a></td>
                            <td><a class="btn btn-danger" href="{{route('admin.opcio.show',$opcio->id)}}">Eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$opcions->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No hi ha registres</strong>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Preu Normal</th>
                        <th>Preu Soci</th>
                        <th> <a class="btn btn-primary" href="{{route('admin.opcio.create')}}">Afegir</a></th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
        @endif
    </div>
 </div>
 