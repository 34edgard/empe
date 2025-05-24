<?php
(function (){
  global $registrarUsuario;
  $registrarUsuario =function (){
    
    extract($_POST);
   // print_r($_POST);
    $contraseña = password_hash($contrasenaRegistro,PASSWORD_DEFAULT) ;
    $usuario = new Administrador;
    $usuario->registrarDatos([$nombre, $emailRegistro, $contraseña]);
    
  };
}
)();