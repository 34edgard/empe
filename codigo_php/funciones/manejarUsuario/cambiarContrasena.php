<?php

(function () {
  global $cambiarContraseña;
  $cambiarContraseña = function () {
    extract($_POST);
    session_start();
   // print_r($_SESSION);

    if (password_verify($contrasenaActual, $_SESSION["contrasena"])) {
      echo "error la contrasena no coinside";
      return;
    }
    $hashContrasena = password_hash($nuevaContrasena,PASSWORD_DEFAULT) ;
    $usuario = new Cliente();
    $usuario->editarDatos([
      "campos" => ["contrasena"],
      "valores" => [$hashContrasena],
      "where" => [
        ["campo" => "id", "operador" => "=", "valor" => $_SESSION["id"]],
      ],
    ]);
    echo "todo a sido un exito";
  };
})();
