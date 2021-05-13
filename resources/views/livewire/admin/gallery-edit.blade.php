<div>
    <div class="row">
        <div class="col-md-12" >
            <div class="d-flex justify-content-center">
                <h1>Informacio de la Imatge </h1>
            </div>
        </div>
    </div>
    
    <div class="container emp-profile">
        <form wire:submit.prevent="edit">
            <div class="row">
                <div class="col-md-4 offset-4">
                    <div class="profile-img">
                        @if ($photo)
                            <img src="{{$photo->temporaryUrl()}}" id="imatge" alt="">
                           @else
                           <img src="/storage/galeria/{{$galeria->image_path}}" id="imatge" alt=""/> 
                           @endif
                       
                        
                        <div class="file btn btn-lg btn-primary">
                            Cambiar Fotografia
                            <input type="file" id="file" wire:model="photo" name="photo"/>
                            @error('file') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <label>Title</label>
                </div>
                <div class="col-md-6 ">
                    <input type="hidden" value="" wire:model="id">
                    <input type="text"  wire:model="title" name="title" placeholder="Posali un títol a la imatge">
                    <br> @error('title') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <label>Descripció</label>
                </div>
                <div class="col-md-6">
                    <input type="hidden" value="" wire:model="id">
                    <input type="text"  wire:model="description" name="description" placeholder="descriu la imatge">
                    <br> @error('description') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-md-2 offset-7">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Enviar"/>
             
                </div>
            </div>
        </form>
    </div>
</div>

