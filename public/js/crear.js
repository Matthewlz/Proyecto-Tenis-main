$("#simple").prop("checked", true);


$( "#afegir" ).click(function() {
    var rowCount = $('table#taula tr:last').index() + 2;
    $('#taula > tbody:last-child').append(`<tr>
    <th scope="row">`+rowCount+`</th>
    <td><input type="date" name="DInici" class="dataInici"></td>
    <td><input type="date" name="DFi" class="dataFi"></td>
    <td><input type="time" name="Hinici" class="HFinici"></td>
    <td><input type="time" name="HFi" class="HFi"></td>
    <td>
        <a class="btn btn-danger">
            <i class="fas fa-trash"></i>
        </a>
    </td>
    </tr>`);
  });
