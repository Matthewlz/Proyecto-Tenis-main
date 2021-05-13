<div>

    <label for="name">Nom de la activitat:</label>

    <input type="text" id="name" name="name" required  placeholder="casal"><br>

    <label for="text">Descripció:</label><br>

    <textarea id="text" name="text" rows="4" cols="50"
        placeholder="At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.">
        </textarea>
    <div class="card">
        <table class="card-body" id="taula">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bloc</th>
                    <th scope="col">DataInici</th>
                    <th scope="col">DataFi</th>
                    <th scope="col">Descripció</th>
                    <th><a class="btn btn-primary" id="afegir">
                            <i class="fas fa-plus"></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><input type="text" name="blog" class="blog" placeholder="blog1"></td>
                    <td><input type="date" name="Inici" class="dataInici"></td>
                    <td><input type="date" name="Fi" class="dataFi"></td>
                    <td><input type="text" name="descripcio" class="descripcio" placeholder="Setmana1"></td>
                    <td>
                        <a class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><input type="text" name="blog" class="blog" placeholder="blog1"></td>
                    <td><input type="date" name="Inici" class="dataInici"></td>
                    <td><input type="date" name="Fi" class="dataFi"></td>
                    <td><input type="text" name="descripcio" class="descripcio" placeholder="Setmana2"></td>
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
    </div>

</div>
