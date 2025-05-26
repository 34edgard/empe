<?php

verificar_login();

$config = [
  "title" => "Dashboard - E.M.P.E",
  "scripts" => ["htmx", "bootstrap", "Contenido"],
];

plantilla("head", $config);
plantilla("tabla-contenido", $config);
plantilla("footer", $config);
