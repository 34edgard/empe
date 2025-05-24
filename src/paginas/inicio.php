<?php
$config = [
  "title" => "inicio",
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
plantilla("reloj", $config);
plantilla("body-inicio", $config);
plantilla("nav-inicio", $config);
plantilla("footer", $config);
