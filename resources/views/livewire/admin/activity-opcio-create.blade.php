<div>
    <form form wire:submit.prevent="crear">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" class="form-control" id="name" wire:model="name" aria-describedby="nameHelp"
                placeholder="ex:Categoria Tennis">
            <small id="nameHelp" class="form-text text-muted">Escriu un nom.</small>
        </div>
        <div class="form-group">
            <label for="preu">Preu</label>
            <input type="number" class="form-control" id="preu" wire:model="preu"aria-describedby="preuHelp"
                placeholder="ex:25.99" step="0.01">
            <small id="preuHelp" class="form-text text-muted">Escriu un preu normal.</small>
        </div>
        <div class="form-group">
            <label for="preu">PreuSoci</label>
            <input type="number" class="form-control" id="preuSoci" wire:model="preuSoci" aria-describedby="preuSociHelp"
                placeholder="ex:25.99" step="0.01">
            <small id="preuSociHelp" class="form-text text-muted">Escriu un preu per a Socis.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
