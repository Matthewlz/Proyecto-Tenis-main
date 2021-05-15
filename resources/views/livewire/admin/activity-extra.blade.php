<div>

    <div>
        <div class="card">
            <div class="card-header">
                <input wire:model="search" class="form-control" placeholder="Introdueix un extra">
            </div>
            @if($extres->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Preu</th>
                            <th>PreuSoci</th>
                            <th> <a class="btn btn-primary" href="{{route('extra.create')}}">Afegir</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($extres as $extra)
                            <tr>
                                <td>{{$extra->id}}</td>
                                <td>{{$extra->name}}</td>
                                <td>{{$extra->preu}}</td>
                                <td>{{$extra->preu_soci}}</td>
                                <td  style="width: 86px "><a class="btn btn-success" href="#">Editar</a></td>
                               <td>
                                
                                    <form method="POST" action="{{ route("extra.delete")}}">
                                        <input type="hidden" name="id" value="{{ $extra->id}}">
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
                {{$extres->links()}}
            </div>
            @else
            <div class="card-body">
                <strong>No hi ha registres</strong>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            
                            <a class="btn btn-primary" href="{{route('extra.create')}}">Afegir</a>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
            @endif
        </div>
      
     </div>
     
</div>
