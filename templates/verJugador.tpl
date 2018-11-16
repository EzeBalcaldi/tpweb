{include file="headerTemporal.tpl"}
  <body>
  <div class="container-fluid">
    <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Procedencia</th>
                  <th scope="col">Id jugador</th>
                  <th scope="col">Equipo </th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
            <tr>
                  <th scope="col">{$Jugador['nombre_jugador']}</th>
                  <th scope="col">{$Jugador['procedencia']}</th>
                  <th scope="col">{$Jugador['id_jugador']}</th>
                  <th scope="col">{$Jugador['nombre_equipo']}</th>
            </tr>
      </tbody>
    </table>
  </div>
  <div class="comentarios">
    <div class="container-fluid">
      <br>
      <br>
      <h2>Comentario</h2>
      <div class="">
dasdasdasdasdasdasdasdas
      </div>
      <form method="post" action="InsertarComentario">
        <div class="form-group">
          <label for="comentarioForm">Comentario</label>
          <input type="text" class="form-control" id="comentarioForm" name="comentarioForm">
        </div>
        <div class="form-group">
          <label for="valoracionForm">Example select</label>
          <select class="form-control" id="valoracionForm" name="valoracionForm">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Comentario</button>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/our.js" charset="utf-8"></script>
</body>
</html>
{include file='footer.tpl'}
