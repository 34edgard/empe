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
Ruta::get("/iniciarSesion", function () {
  include "./src/paginas/iniciarSesion.php";
});
Ruta::post(
  "/iniciarSesion",
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
Ruta::get("/Contenido?todo", $contenidoTodo, ["todo"]);
Ruta::get("/Contenido", $contenidoAprobado);
Ruta::post("/Usuarios", $registrarUsuario, [
  "nombre",
  "emailRegistro",
  "contrasenaRegistro",
]);
Ruta::post('/Usuarios/cambiar/contrasena',$cambiarContraseña,[
  'contrasenaActual',
  'nuevaContrasena'
]);
Ruta::post("/Contenido", $subirContenido, [
  "guardar",
  "titulo",
  "autor",
  "categoria",
  "tipo_contenido",
  "descripcion",
]);
