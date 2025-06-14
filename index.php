<?php
$p = "./";

include "./codigo_php/includer.php";

Ruta::get("/", function () {
  include "./src/paginas/index.php";
});
Ruta::get("/s",function(){
//  include "./codigo_php/funciones/bd_php/export_db.php";

sql();
});
Ruta::get("/iniciar/sesion", function () {
  include "./src/paginas/iniciar/sesion.php";
});
//print_r($_POST);
Ruta::post(
  "/iniciar/sesion",
  $inicioDeSesion,
  ["contrasenaLogin", "emailLogin"],
  [$ValidarDatosDB]
);


Ruta::get("/error", function () {
  echo json_encode(["error" => true]);
});
Ruta::post("/error", function () {
  echo json_encode(["error" => true]);
});
Ruta::get("/inicio", function () {
  include "./src/paginas/inicio.php";
});

Ruta::get("/dashboard", function () {
  include "./src/paginas/dashboard.php";
});
Ruta::get("/contenido?todo", $contenidoTodo, ["todo"]);
Ruta::get("/contenido", $contenidoAprobado);
Ruta::post("/Usuarios", $registrarUsuario, [
  "nombre",
  "emailRegistro",
  "contrasenaRegistro",
]);
Ruta::post('/Usuarios/cambiar/contrasena',$cambiarContraseña,[
  'contrasenaActual',
  'nuevaContrasena'
]);
Ruta::post("/contenido", $subirContenido, [
  "guardar",
  "titulo",
  "autor",
  "categoria",
  "tipo_contenido",
  "descripcion",
]);
 