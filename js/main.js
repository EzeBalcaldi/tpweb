'use strict';
let templateComentarios;
document.querySelector("#cargarComentarios").addEventListener("click", cargarComentarios);

function cargarComentarios(){
  fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
    let templateEquipos = Handlebars.compile(template);
    getComentarios();
  })
}
function getComentarios(){
  fetch("api/comentarios")
  .then(response=> response.json())
  .then(jsonComentarios => {
    console.log(jsonComentarios);
    //mostrarComentarios(jsonComentarios);
  })
}
function mostrarComentarios(){
  let context = {
    comentarios: jsonComentarios
  }
  let html = templateComentarios(context);
  document.querySelector(".comentarios").innerHTML = html;
}
