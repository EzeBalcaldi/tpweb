{include file="headerTemporalVisitante.tpl"}

  <body>
  <div class="container-fluid">
    <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Procedencia</th>
                  <th scope="col">Id jugador</th>
                  <th scope="col">Nombre Equipo  </th>
          </tr>
          </thead>
        <tbody class="contenedor-tabla" >
          {foreach from=$Jugadores item=jugador}
            <tr>
                  <th scope="col">{$jugador['nombre_jugador']}</th>
                  <th scope="col">{$jugador['procedencia']}</th>
                  <th scope="col">{$jugador['id_jugador']}</th>
                  <th scope="col">{$jugador['nombre_equipo']}</th>
                 </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/our.js" charset="utf-8"></script>
</body>
</html>
{include file='footer.tpl'}
