<?php
(function (){
global  $contenidoAprobado;
$contenidoAprobado = function (){
  $sql = "SELECT * FROM `Contenidos` join `SubidaContenidos` WHERE `Contenidos`.`id` = `SubidaContenidos`.`contenido_id` and `SubidaContenidos`.`estado` = 'publicado'";
$res =  (new ConsultasBD)->consultarRegistro($sql,32);
  echo json_encode($res);
  
};
  })();