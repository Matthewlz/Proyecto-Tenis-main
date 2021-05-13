<div>
    <div>
  
        <h1>Informacio de la activitat</h1> 
        <div>
            <div class="card">
                <div class="card-header">
                    <input wire:model="search" class="form-control" placeholder="Introdueix un usuari">
                </div>
                @if($activitats->count())
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                <th>Tipús</th>
                             
                                <th> <a class="btn btn-primary" href="{{route('admin.activitats.create')}}">Afegir</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activitats as $activitat)
                                <tr>
                                    <td>{{$activitat->id}}</td>
                                    <td>{{$activitat->name}}</td>
                                    <td>{{$activitat->tipus}}</td>
                                   
                                    <td  style="width: 86px "><a class="btn btn-success" href="{{route('admin.activitats.edit',$activitat->id)}}">Editar</a></td>
                                    <td><a class="btn btn-danger" href="{{route('admin.activitats.show',$activitat->id)}}">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$activitats->links()}}
                </div>
                @else
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                <th>Tipús</th>
                             
                                <th> <a class="btn btn-primary" href="{{route('admin.activitats.create')}}">Afegir</a></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                    <strong>No hi ha registres</strong>
                    
                </div>
                @endif
            </div>
         </div>
    </div>
    
</div>
