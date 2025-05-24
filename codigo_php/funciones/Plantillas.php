<?php
function plantilla(string $nombre ,array $datos =[]){
  extract($datos);
  include "./src/html/{$nombre}.php";

}
