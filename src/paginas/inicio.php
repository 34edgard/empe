<?php
verificar_login("email");
$config = [
  "title" => "inicio",
  "styles" => ["bootstrap.min", "index"],
  "scripts" => [
    "htmx",
    "CerrarSesion",
    "clases/ClaseSolicitud",
    "Contenidos",
    "bootstrap",
    "subirContenidos",
    "validarFormulario",
  ],
];

plantilla("head", $config);
//plantilla("reloj", $config);
plantilla("body-inicio", $config);
plantilla("nav-inicio", $config);
plantilla("footer", $config);
