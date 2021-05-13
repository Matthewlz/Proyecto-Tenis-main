<div>
    <!-- form card change password -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Canviar Contrasenya</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="edit">
                <div>
                    @if (session()->has('missatge'))
                        <div class="alert alert-success">
                            {{ session('missatge') }}
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" wire:model="usuari">
                    <label for="inputPasswordOld">Contrasenya Actual</label>
                    <input type="password" class="form-control" wire:model="inputPasswordOld" required>
                    @error('inputPasswordOld')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPasswordNew">Nova Contrasenya</label>
                    <input type="password" class="form-control" wire:model="inputPasswordNew" required>
                    <span class="form-text small text-muted">
                        La contrasenya, ha de tenir 8 caracters no pot contenir espais.
                    </span>
                    @error('inputPasswordNew')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPasswordNewVerify">Verifica</label>
                    <input type="password" class="form-control" wire:model="inputPasswordNewVerify">
                    <span class="form-text small text-muted">
                        Confirma la contrasenya.
                    </span>
                    @error('inputPasswordNewVerify')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg float-right">Guardar</button>
                </div>

            </form>
        </div>
    </div>
    <!-- /form card change password -->
</div>
