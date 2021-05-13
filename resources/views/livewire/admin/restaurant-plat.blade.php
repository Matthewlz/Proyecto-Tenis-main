<div>
    <div>
  
        <h1>Informacio de la plat</h1> 
        <div>
            <div class="card">
                <div class="card-header">
                    <input wire:model="search" class="form-control" placeholder="Introdueix un usuari">
                </div>
                @if($plats->count())
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                <th>Descripció</th>
                                <th>Seccio</th>
                                <th>Preu</th>
                                <th> <a class="btn btn-primary" href="{{route('admin.plats.create')}}">Afegir</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plats as $plat)
                                <tr>
                                    <td>{{$plat->platId}}</td>
                                    <td>{{$plat->title}}</td>
                                    <td>{{$plat->description}}</td>
                                    <td>{{$plat->name}}</td>
                                    <td>{{$plat->preu}}€</td>
                                    <td  style="width: 86px "><a class="btn btn-success" href="{{route('admin.plats.edit',$plat->platId)}}">Editar</a></td>
                                    <td><a class="btn btn-danger" href="{{route('admin.plats.show',$plat->platId)}}">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$plats->links()}}
                </div>
                @else
                <div class="card-body">
                    <strong>No hi ha registres</strong>
                </div>
                @endif
            </div>
         </div>
    </div>
    
</div>
