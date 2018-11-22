<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="CSS/estilos.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <base href="http://{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="">

  <title>{$Titulo}</title>
</head>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <img src="imagenes/nba-logo.png" alt="" height="50px" class="foto">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="homeAdmin" id="botonHome">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="equiposadmin" id="botonTabla">Regular Season</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jugadoresadmin" id="botonLista">All-Star</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout" id="botonLogout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  </header>
