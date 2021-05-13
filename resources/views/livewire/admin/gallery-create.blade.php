<div>

    <div class="container center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="white">Pujar Fotografia</h1>
                <p class="white">Puja una fotografia per la teva web</p>
            </div>
        </div>
        
        <form form wire:submit.prevent="crear">
            <div class="row">
                <div class="col-md-3 center">
                   
                </div>
                <div class="col-md-6 col-md-offset-3 center">
                    <div class="btn-container">
                        <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                        <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                        <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                        <p id="namefile">Comproba que sigui una fotografia</p>
                        <button type="button" id="btnup" class="btn btn-primary btn-lg">Escolleix la teva imatge!</button>
                        <input type="file" wire:model="photo" name="photo" id="photo">
                        <br> @error('photo') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-end">
                    <label style="color: white">Title</label>
                </div>
                <div class="col-md-6 d-flex justify-content-first">
                    <input type="text"  wire:model="title" name="title" placeholder="Posali un títol a la imatge">
                    <br> @error('title') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <label style="color: white">Descripció</label>
                </div>
                <div class="col-md-6 d-flex justify-content-first">
                  
                    <input type="text"  wire:model="description" name="description" placeholder="descriu la imatge">
                    <br> @error('description') <span class="text-danger">{{$message}}</span>@enderror
                </div>			
                <div class="col-md-12">
                    <input type="submit" class="btn btn-danger" name="btnAddMore" value="Enviar"/>
                </div>
            </div>
        </form>
    </div>
</div>
