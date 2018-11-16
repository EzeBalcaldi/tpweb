{include file="header.tpl"}
    <h1>{$Titulo}</h1>
    <div class="container-fluid">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/update">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Equipo["id_equipo"]}">
        <div class="form-group">
          <label for="tituloForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Equipo["nombre_equipo"]}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Partidos ganados</label>
          <input type="text" class="form-control" id="pgForm" name="pgForm" value="{$Equipo["partidos_ganados"]}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Partidos Perdidos</label>
          <input type="text" class="form-control" id="ppForm" name="ppForm" value="{$Equipo["partidos_perdidos"]}">
        </div>
        <button type="submit" class="btn btn-primary">Editar Equipo</button>
      </form>
    </div>
{include file="footer.tpl"}
