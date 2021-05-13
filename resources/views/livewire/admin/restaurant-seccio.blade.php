<div>
    <div>
  
        <h1>Informació de la seccio</h1> 
        <div>
            <div class="card">
                <div class="card-header">
                    <input wire:model="search" class="form-control" placeholder="Introdueix una seccio">
                </div>
                    <form  method="POST"  action="{{ route('admin.seccio.store')}}">
                        @csrf
                        <input type="text" placeholder="Crea una Seccio" name="name">
                        <input type="submit"  name="btnAddMore" value="Afegir"  class="btn btn-primary"/>
                    
                    </form>
                @if($seccions->count())
                <div class="card-body">
                   
                   
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seccions as $seccio)
                                <tr>
                                    <td>{{$seccio->id}}</td>
                                    <form  method="POST"  action="{{ route('admin.seccio.update',$seccio->id)}}">
                                        @csrf
                                        
                                        <td><input type="text" value="{{$seccio->name}}"name="name"></td>
                                     
                                        <td><input type="submit"  name="btnAddMore" value="Editar" class="btn btn-success"/></td>
                                        @method('PUT')
                                    </form>
                                    <td><a class="btn btn-danger" href="{{route('admin.seccio.show',$seccio->id)}}">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$seccions->links()}}
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
