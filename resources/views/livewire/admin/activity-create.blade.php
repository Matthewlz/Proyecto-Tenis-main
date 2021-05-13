<div>
  
            <form form wire:submit.prevent="crear">
            <div class="col-md-12">
                <label for="basic-url">Nom de la activitat</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  wire:model="name"  id="basic-url" aria-describedby="basic-addon3">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="col-md-12">
                <i class="fas fa-pencil-alt prefix"></i>
                <label for="text">Descripció:</label><br>
            </div>

            <div class="col-md-12">
                <div class="md-form">
                    <textarea id="form10" class="md-textarea form-control"  wire:model="description" rows="3"></textarea>
                  
                </div>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="col-md-12">
                <h2>Opcions</h2>
            </div>
            <div class="col-md-12">
                @foreach ($opcions as $opcio)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  wire:model="checkOpcions" id="{{ $opcio->id }}"
                            value="{{ $opcio->id }}">
                        <label class="form-check-label" for="inlineCheckbox1">{{ $opcio->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12">
                <h2>Extras</h2>
            </div>

            <div class="col-md-12">
                @foreach ($extres as $extra)


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" wire:model="checkExtras" id="{{ $extra->name }}"
                            value="{{ $extra->id }}">
                        <label class="form-check-label" for="inlineCheckbox1">{{$extra->name }}</label>
                    </div>
                @endforeach

            </div>


            <div class="col-md-12 d-flex justify-content-center">
                <h1>Foto Activitat</h1>
            </div>
            <div class="col-md-6 justify-content-center">
                <div class="profile-img">
                    @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}" id="imatge"  width="450" height="450 " alt="">
                    @endif
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" id="file" wire:model="photo" name="photo" />
                        @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h1>Tipus</h1>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <select name="select"  wire:model="tipus" >
                    <option value="none" selected disabled hidden>
                        Select an Option
                    </option>
                    <option value="Infantil">Infantil</option>
                    <option value="Adult">Adult</option>
                    <option value="Sense preferencia">Sense preferencia</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" name="btnAddMore" value="Enviar"/>
        </div>
       </form>


<!--   <div class="card">
        <table class="card-body" id="taula">
            <thead>
                <tr>
                    <th scope="col">#</th>
                  
                    <th scope="col">DataInici</th>
                    <th scope="col">DataFi</th>
                    <th scope="col">HoraInici</th>
                    <th scope="col">HoraFi</th>
                    <th><a class="btn btn-primary" id="afegir">
                            <i class="fas fa-plus"></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                  
                    <td><input type="date" name="DInici" class="dataInici"></td>
                    <td><input type="date" name="DFi" class="dataFi"></td>
                    <td><input type="time" name="Hinici" class="HFinici"></td>
                    <td><input type="time" name="HFi" class="HFi"></td>
                    
                    <td>
                        <a class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                 
                    <td><input type="date" name="DInici" class="dataInici"></td>
                    <td><input type="date" name="DFi" class="dataFi"></td>
                    <td><input type="time" name="Hinici" class="HFinici"></td>
                    <td><input type="time" name="HFi" class="HFi"></td>
                    <td>
                        <a class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="card-footer">
            <a class="btn btn-success">Enviar</a>
        </div>
    </div>-->
