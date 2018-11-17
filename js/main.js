'use strict';
let templateEquipos;
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(text => {
  let templateEquipos = Handlebars.compile(text);
  getEquipos();
})
function getEquipos(){
  fetch("api/equipo")
  .then(response=> response.json())
  .then(jsonEquipos => {
    console.log(jsonEquipos);
    //mostrarEquipos(jsonEquipos);
  })
}
function mostrarEquipos(){
  let context = {
    equipos: jsonEquipos
  }
  let html = templateEquipos(context);
  document.querySelector("#equipos-container").innerHTML = html;
}
