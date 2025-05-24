<?php
$config = [
  "title" => "Registro / Inicio de Sesión - E.M.P.E",
  "nav_title" => "E.M.P.E - Registro / Inicio de Sesión",
  "scripts" => [
    "bootstrap",
    "htmx",
    "RegistroUsuario",
    "validarFormulario",
    "index",
    "Clases/ClaseSolicitud",
  ],
];

plantilla("head", $config);
plantilla("nav", $config);
plantilla("sesion", $config);
plantilla("footer", $config);





    


  