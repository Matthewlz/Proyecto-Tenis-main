<div>
    <div>
        <form wire:submit.prevent="edit">
            <div class="container rounded bg-white mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            @if ($photo)
                            <img src="{{$photo->temporaryUrl()}}" id="imatge" alt="">
                           @else
                           <img src="/storage/plat/{{$plat->image_path}}" id="imatge" alt=""/> 
                           @endif
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" id="file" wire:model="photo" name="photo" />
                                @error('file') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-row align-items-center back"><i
                                        class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                    <h3>Canviar Plat</h3>
                                </div>
    
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><input type="text" class="form-control"  id="title"
                                    wire:model="title">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="descripció del plat"
                                        wire:model="description" name="description">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <select name="menu_id" wire:model="menu_id" class="form-control">
                                        @foreach ($Menus as $menu)
                                            <option value="{{$menu->id}}">{{$menu->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="preu ex: 35.99" wire:model="preu"
                                        name="preu">
                                </div>
                            </div>
    
                            <div class="mt-5 text-right"> <input type="submit" class="btn btn-danger" name="btnAddMore"
                                    value="Enviar" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>
