<?php

verificar_login("email");

$config = [
  "title" => "Dashboard - E.M.P.E",
  "styles" => ["bootstrap.min", "index"],
  "scripts" => ["htmx", "bootstrap", "Contenido"],
];

plantilla("head", $config);
plantilla("tabla-contenido", $config);
plantilla("footer", $config);
