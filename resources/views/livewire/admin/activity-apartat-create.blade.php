<div>
    <div>
        <form form wire:submit.prevent="crear" action="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="name" wire:model="name" aria-describedby="nameHelp"
                    placeholder="ex: CategoriaFemenina">
                <small id="nameHelp" class="form-text text-muted">Escriu un nom.</small>
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
