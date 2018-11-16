{include file="header.tpl"}
<div class="container-fluid">
  <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Procedencia</th>
                <th scope="col">Id jugador</th>
                <th scope="col">Id equipo </th>
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
                <th scope="col"> <a href="borrarJugador/{$jugador['id_jugador']}">BORRAR</th>
                <th scope="col"> <a href="editarJugador/{$jugador['id_jugador']}">EDITAR</th>
                <th scope="col"> <a href="verJugador/{$jugador['id_jugador']}">VER MAS</th>
          </tr>
      {/foreach}
    </tbody>
  </table>
</div>
{include file="footer.tpl"}
