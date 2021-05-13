<div class="container emp-profile">
    <form wire:submit.prevant="edit">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}">
                    @else
                        <img src="{{ $imatge }}" id="imatge" alt="" />
                    @endif

                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" id="file" wire:model="photo" name="photo" />
                        @error('file') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{ $user->name }}
                    </h5>


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Dades Personals</a>
                        </li>
                      
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Enviar" />

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                            <div class="col-md-6">
                                <label>Nom Complet</label>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" value="" wire:model="id">
                                <input type="text" wire:model="name" name="name" placeholder="Alèx Mercader Palau">
                                <br> @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Correu</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="email" placeholder="alex24@gmail.com">
                                <br> @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Telèfon</label>
                            </div>
                            <div class="col-md-6">

                                <input type="text" wire:model="phone" wire:model="phone" placeholder="680858462">
                                <br> @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>DNI</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="dni" placeholder="45828332N">
                                <br> @error('dni') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Adreca</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="adreca" placeholder="carrer aigua viva nº12">
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Població</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="poblacio" placeholder="Lloret de Mar">
                                <br> @error('poblacio')<span class="text-danger">{{ $message }}</span>@enderror
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Provincia</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="provincia" placeholder="Girona">
                                <br> @error('provincia') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>targetaSalut</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="targetaSalut" placeholder="030101002">
                                <br> @error('targetaSalut') <span class="text-danger">{{ $message }}</span>@enderror
                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Codi Postal</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="codiPostal" placeholder="17310">
                            </div>
                        </div>
                    </div>
                    
                  
                </div>
            </div>
        </div>
    </form>
</div>
</div>
