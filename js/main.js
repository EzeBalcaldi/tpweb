'use strict'
let templateComentarios;
let urlAPI = 'api/comentario';
let botonGet = document.querySelector("#GetComentarios")
botonGet.addEventListener("click", cargarComentarios);


let botonPost = document.querySelector("#crearcomentario")
botonPost.addEventListener("click", insertarComentarios);


function cargarComentarios(){
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
  templateComentarios = Handlebars.compile(template);
  getComentarios();
})
}

//getProductos();

function getComentarios(){
  let id = document.getElementById("id_jugador").value;
  console.log(id);
  fetch(urlAPI + '/' +id)
  .then(response => response.json())
  .then(jsonComentarios => {
    mostrarComentarios(jsonComentarios);
    console.log(jsonComentarios);
  let botonDelete = document.querySelectorAll(".borrarcomentario");
  botonDelete.forEach(e=> e.addEventListener("click", function(){borrarComentario(e.getAttribute("value"))}));
  })
}

function mostrarComentarios(jsonComentarios){
let context = {
  comentarios : jsonComentarios
}
let html = templateComentarios(context);
document.querySelector("#comentarios").innerHTML = html;
}


function insertarComentarios(){
  let comentario = document.querySelector("#comentarioForm").value;
  let valoracion = document.querySelector("#valoracionForm").value;
  let id = document.querySelector("#id_jugador").value;
  let comentarios=
  {
  "comentario": comentario,
  "valoracion": valoracion
}
  fetch("api/comentario/"+id,{
    'method': 'POST',
    'headers': {'content-type': 'application/json'},
    'body': JSON.stringify(comentarios)
  })
}

function borrarComentario(id){
  fetch(urlAPI + '/' + id, {
    method: 'DELETE',
    headers: {
      'Content-Type':'application/json'
    }
}).then(r=>{
  console.log(r)
cargarComentarios();
})
}
