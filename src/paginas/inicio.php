<?php
verificar_login("email");
$config = [
  "title" => "inicio",
  "styles" => ["bootstrap.min", "index"],
  "scripts" => [
    "htmx",
    "CerrarSesion",
    "clases/ClaseSolicitud",
    "bootstrap",
    "subirContenidos",
    "validarFormulario",
  ],
];

plantilla("head", $config);
//plantilla("reloj", $config);
plantilla("body-inicio", $config);
plantilla("nav-inicio", [
  "nav_items" => ["inicio", "Noticias", "Usuario", "soporteFAQ"],
]);
plantilla("footer", $config);
