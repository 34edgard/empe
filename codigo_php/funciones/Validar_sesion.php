<?php
function verificar_login($dato)
{
  if (session_id() == "" && !isset($session)) {
    if (!isset($_SESSION[$dato])) {
      cambiarPagina();
      exit();
    }
  }
}

