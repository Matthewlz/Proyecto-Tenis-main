
<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Introdueix un usuari">
        </div>
        @if($opcionss->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th> <a class="btn btn-primary" href="{{route('apartat.create',$identificador)}}">Afegir</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($opcionss as $opcio)
                        <tr>
                            <td>{{$opcio->id}}</td>
                            <td>{{$opcio->name}}</td>
                            <td  style="width: 86px "><a class="btn btn-success" href="#">Editar</a></td>
                           <td>
                            
                                <form method="POST" action="{{ route("apartat.delete")}}">
                                    <input type="hidden" name="id" value="{{ $opcio->id}}">
                                    <input type="hidden" name="id_opcio" value="{{ $identificador}}">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                  
                                    </form>
                            </td>
                       
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$opcionss->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No hi ha registres</strong>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        
                        <a class="btn btn-primary" href="{{route('apartat.create',$identificador)}}">Afegir</a>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
        @endif
    </div>
    <a class="btn btn-primary" href="{{route('admin.opcio.index')}}">Tornar</a>
 </div>
 