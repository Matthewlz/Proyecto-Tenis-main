<div>
  
    <h1>Informacio de la Galeria</h1> 
    <div>
        <div class="card">
            <div class="card-header">
                <input wire:model="search" class="form-control" placeholder="Introdueix un usuari">
            </div>
            @if($galerias->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Títol</th>
                            <th>Descripció</th>
                            <th> <a class="btn btn-primary" href="{{route('admin.galeria.create')}}">Afegir</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galerias as $galeria)
                            <tr>
                                <td>{{$galeria->id}}</td>
                                <td>{{$galeria->title}}</td>
                                <td>{{$galeria->description}}</td>
                                <td  style="width: 86px "><a class="btn btn-success" href="{{route('admin.galeria.edit',$galeria->id)}}">Editar</a></td>
                                <td><a class="btn btn-danger" href="{{route('admin.galeria.show',$galeria->id)}}">Eliminar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$galerias->links()}}
            </div>
            @else
            <div class="card-body">
                <strong>No hi ha registres</strong>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                <th>Descripció</th>
                                <th> <a class="btn btn-primary" href="{{route('admin.galeria.create')}}">Afegir</a></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
     </div>
</div>
