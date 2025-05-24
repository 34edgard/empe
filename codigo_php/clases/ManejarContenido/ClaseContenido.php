<?php
interface Icontenido {
  public function subir($datos);
  public function consultar($datos);
  public function editar($datos);
  public function eliminar($datos);
}


class Contenido implements Icontenido {
  public $tabla;
  public $campos;
  public $conn;
  public $consulta;
  public $registrar;
  public $editar;
  public $eliminar;
  
  public function __construct($tabla = 'Contenidos', $campos = ['titulo',
    'autor',
    'fecha_publicacion',
    'categoria',
    'tipo_contenido',
    'img_url',
    'descripcion']) {
    $this->tabla = $tabla;
    $this->campos = $campos;
    $this->conn = new ConsultasBD;
    $this->consulta = new Consultar;
    $this->registrar = new Registrar;
    $this->editar = new Editar;
    $this->eliminar = new Eliminar;
  }
  public function subir($datos) {
    (new guardarArchivo('./src/img/'))->guardar();
    $sql = $this->registrar->generar_sql(['tabla' => $this->tabla, 'campos' => $this->campos, 'valores' => $datos]);
    $this->conn->ejecutarConsulta($sql);
    
    $contenido_id = $this->conn->consultarRegistro("SELECT `id` FROM `Contenidos` ORDER BY `id` DESC LIMIT 1");
    $sql = "INSERT INTO `SubidaContenidos` (`usuario_id`,`contenido_id`) VALUES (".$_SESSION['id'].",".$contenido_id[0][0].")";
    $this->conn->ejecutarConsulta($sql);


  }
  public function consultar($datos) {}
  public function editar($datos) {}
  public function eliminar($datos) {}
}