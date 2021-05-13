<div>
   <div class="card">
       <div class="card-header">
           <input wire:model="search" class="form-control" placeholder="Introdueix un usuari">
       </div>
       @if($users->count())
       <div class="card-body">
           <table class="table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Nom</th>
                       <th>Email</th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($users as $user)
                       <tr>
                           <td>{{$user->id}}</td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td><a class="btn btn-danger" href="{{route('admin.users.edit',$user)}}">Perfil</a></td>
                       </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
       <div class="card-footer">
           {{$users->links()}}
       </div>
       @else
       <div class="card-body">
           <strong>No hi ha registres</strong>
       </div>
       @endif
   </div>
</div>
