{include file="headerVisitante.tpl"}
<body>
  <form method="post" action="agregarUsuario">
    <div class="form-group">
      <label for="userForm">Nombre Usuario</label>
      <input type="text" class="form-control" id="userForm" name="userForm">
    </div>
    <div class="form-group">
      <label for="passForm">Contraseña</label>
      <input type="password" class="form-control" id="passForm" name="passForm">
    </div>
    <input type="submit" name="" value="enviar">
</body>
{include file="footer.tpl"}
