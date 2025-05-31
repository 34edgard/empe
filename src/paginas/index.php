<?php
$config = [
  "title" => "Cuenta Regresiva",
  "styles" => ['bootstrap.min','index'],
  "scripts" => ['htmx','reloj']
];

plantilla("head", $config);
plantilla("reloj", $config);
plantilla("footer", $config);

