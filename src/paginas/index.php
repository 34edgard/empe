<?php
$config = [
  "title" => "Cuenta Regresiva",
  "scripts" => ['htmx','reloj']
];

plantilla("head", $config);
plantilla("reloj", $config);
plantilla("footer", $config);

