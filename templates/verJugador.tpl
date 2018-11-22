{include file="header.tpl"}
  <body>
  <div class="container-fluid">
    <input type="hidden" name="" id= "id_jugador" value="{$Jugador['id_jugador']}">
    <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Procedencia</th>
                  <th scope="col">Id jugador</th>
                  <th scope="col">Equipo </th>
                  <th scope="col"> Imagen </th>
                  <th scope="col"> </th>
            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
            <tr>
                  <th scope="col">{$Jugador['nombre_jugador']}</th>
                  <th scope="col">{$Jugador['procedencia']}</th>
                  <th scope="col">{$Jugador['id_jugador']}</th>
                  <th scope="col">{$Jugador['nombre_equipo']}</th>
                  {foreach from= $imagenes item=imagen}
                  <td><img src="{$imagen['ruta']}" alt="" height="100px"></td>
                  {/foreach}
            </tr>
      </tbody>
    </table>
  </div>
  <div class="container-fluid">
  </div>
  <button id="GetComentarios" type="button" name="button">Ver Comentarios</button>

    <div class="container-fluid">
      <h2>Comentario</h2>
      <form >
        <div class="form-group">
          <label for="comentarioForm">Comentario</label>
          <textarea class="form-control" id="comentarioForm" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="valoracionForm">Example select</label>
          <select class="form-control" id="valoracionForm" name="valoracionForm">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <button value="{$Jugador['id_jugador']}" id="crearcomentario">Agregar Comentario</button>
      </form>
    </div>


    <div class="comentarios" id="comentarios">

  </div>

</body>
</html>
{include file='footer.tpl'}
