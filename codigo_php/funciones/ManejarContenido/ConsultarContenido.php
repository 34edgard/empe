<?php
(function (){
global  $contenidoTodo;
$contenidoTodo = function (){
  
  $sql = "SELECT * FROM `Contenidos` join `SubidaContenidos` WHERE `Contenidos`.`id` = `SubidaContenidos`.`contenido_id`";
  
$res =  (new ConsultasBD)->consultarRegistro2($sql,32);
//header('Content-Type: application/json');
//print_r($res);
  echo json_encode($res);
  
};
  })();