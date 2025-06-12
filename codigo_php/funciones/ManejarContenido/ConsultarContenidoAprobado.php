<?php
(function (){
global  $contenidoAprobado;
$contenidoAprobado = function (){
  $sql = "SELECT * FROM `Contenidos` join `SubidaContenidos` WHERE `Contenidos`.`id` = `SubidaContenidos`.`contenido_id` and `SubidaContenidos`.`estado` = 'publicado'";
$res =  (new ConsultasBD)->consultarRegistro2($sql);
  foreach ($res as $key => $libro) {
    plantilla('libro',$libro);
  }
  
};
  })();
