<?php
class ValidarSesion {
  
  public static function ComprobarSesion(string $nombre) {
    if (session_id() == "") {
      
      if (!isset($_SESSION[$nombre])) {
        $_SERVER['REQUEST_URI'] = '/';
      }
    
    }
  }
  
  public static function AccesoSoloSiExiste(string $nombre,$valor){
    
    if(!isset($_SESSION[$nombre])) return;
    if($_SESSION[$nombre] != $valor){
     $_SERVER['REQUEST_URI'] = '/';
    }
    
  }
  
  
  
}