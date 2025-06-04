<?php
(function () {
  global $inicioDeSesion;
  $inicioDeSesion = function () {
    extract($_POST);
    $vd = func_get_args();
    
    session_start();
    
    $re = $vd[1][0]($emailLogin, $contrasenaLogin);
print_r($re);

    if ($re[0]) {
      $_SESSION["id"] = $re[1][0]['id'];
      $_SESSION["usuario"] = $re[1][0]['nombre'];

      $_SESSION["contrasena"] = $re[1][0]['contrasena'];
      $_SESSION["email"] = $re[1][0]['email'];
      $_SESSION["TipoDeUsuario"] = $re[1][0]['TipoDeUsuario'];

      cambiarPagina('inicio');
    } else {
      echo "error";
    }
  };
})();
