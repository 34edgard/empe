<?php
function verificar_login($dato ='')
{
  session_start();
  if (session_id() == "" && !isset($session)) {
    if (!isset($_SESSION[$dato])) {
      cambiarPagina();
      exit();
    }
  }
}

