{include file="header.tpl"}
    <h1>{$Titulo}</h1>
    <div class="container-fluid">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/updateJugador">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Jugador["id_jugador"]}">
        <div class="form-group">
          <label for="tituloForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Jugador["nombre_jugador"]}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Procedencia</label>
          <input type="text" class="form-control" id="lugarForm" name="lugarForm" value="{$Jugador["procedencia"]}">
        </div>
        <button type="submit" class="btn btn-primary">Editar Jugador</button>
      </form>
    </div>
{include file="footer.tpl"}
