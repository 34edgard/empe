<?php

(function(){
  global $cerrarSesion;
  $cerrarSesion = function (){
    session_start();
    session_unset();
    session_destroy();
  };
})();