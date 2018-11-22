{include file="header.tpl"}
  <body>
  <div class="container-fluid">
    <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Procedencia</th>
                  <th scope="col">Id jugador</th>
                  <th scope="col">Nombre Equipo </th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
          {foreach from=$Jugadores item=jugador}
            <tr>
                  <th scope="col">{$jugador['nombre_jugador']}</th>
                  <th scope="col">{$jugador['procedencia']}</th>
                  <th scope="col">{$jugador['id_jugador']}</th>
                  <th scope="col">{$jugador['nombre_equipo']}</th>
                  <th scope="col"> <a href="borrarJugador/{$jugador['id_jugador']}">BORRAR</th>
                  <th scope="col"> <a href="editarJugador/{$jugador['id_jugador']}">EDITAR</th>
                  <th scope="col"> <a href="verJugadorAdmin/{$jugador['id_jugador']}">VER MAS</th>
            </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
  <a href="jugadoresordenadosadmin/">Ordenar jugadores</a>

  <div class="container-fluid">
    <br>
    <br>
    <h2>Jugador</h2>
    <form method="post" action="agregarJugador" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombreForm">Nombre Jugador</label>
        <input type="text" class="form-control" id="nombreForm" name="nombreForm">
      </div>
      <div class="form-group">
        <label for="lugarForm">Procedencia</label>
        <input type="text" class="form-control" id="lugarForm" name="lugarForm">
      </div>
      <div class="form-group">
        <label for="idForm">id equipo</label>
        <input type="text" class="form-control" id="idForm" name="idForm">
      </div>
      <div class="form-group">
        <label for="imagenes">Imagen</label>
        <input type="file" id="imagenes" name="imagenes[]" class="" multiple>
      </div>
      <button type="submit" class="btn btn-dark">Agregar Jugador</button>
    </form>
  </div>
<div class="container-fluid">
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/our.js" charset="utf-8"></script>
</body>
</html>
{include file='footer.tpl'}
